<?php

namespace alerts\alerts;

abstract class alerts
{
    // BADGE
    const BADGE_PRIMARY    = 'primary';
    const BADGE_SECONDARY  = 'secondary';
    const BADGE_SUCCESS    = 'success';
    const BADGE_DANGER     = 'danger';
    const BADGE_WARNING    = 'warning';
    const BADGE_INFO       = 'info';
    const BADGE_LIGHT      = 'light';
    const BADGE_DARK       = 'dark';

    // LABEL BADGE
    const LABEL_BADGE = array(
        self::BADGE_PRIMARY   => 'Primário',
        self::BADGE_SECONDARY => 'Secundário',
        self::BADGE_SUCCESS   => 'Sucesso',
        self::BADGE_DANGER    => 'Erro',
        self::BADGE_WARNING   => 'Atento',
        self::BADGE_INFO      => 'Informação',
        self::BADGE_LIGHT     => 'Inativo',
        self::BADGE_DARK      => 'Ativo',
    );

    static public $clear = true;

    /**
     * Busca pela mensagem de alerta na sessão
     * 
     * 
     * @return bool
     */
    static final function searchInSession()
    {
        if(!isset($_SESSION['msgAlert']) || empty($_SESSION['msgAlert'])){
            $_SESSION['msgAlert'] = array();
        }
        return $_SESSION['msgAlert'];
    }

    /**
     * Salva na sessão a mensagem de alerta
     *
     * @param string $alert
     * @param string $badge
     * @return void
     */
    public final function saveInSession(string $alert, string $badge = self::BADGE_SUCCESS)
    {
        if(!isset($alert) || empty($alert)){
            return false;
        }

        if(isset($_SESSION['msgAlert'][$badge]) && is_array($_SESSION['msgAlert'][$badge])){
            $_SESSION['msgAlert'][$badge][] = $alert;
            return true;
        }

        $_SESSION['msgAlert'][$badge] = array($alert);
        return true;
    }

    /**
     * Expõe template para do alerta conforme o layout
     *
     * @return void
     */
    public static function template(string $message, string $badge = self::BADGE_SUCCESS)
    {
        if(!isset($message) || empty($message)){
            return null;
        }

        return sprintf('<div class="sufee-alert alert with-close alert-%1$s alert-dismissible fade show">
                <span class="badge badge-pill badge-%1$s">%2$s</span></br>
                %3$s
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>',
            $badge,
            self::LABEL_BADGE[$badge],
            $message
        );
    }

    /**
     * Regista um alerta
     *
     * @param string  $mensagem
     * @param string  $badge
     * @return void
     */
    static final public function set(string $mensagem, string $badge = self::BADGE_SUCCESS)
    {
        self::saveInSession(str_pad($mensagem,120), $badge);

        return self;
    }

    /**
     * Retorna alerta definido
     * @param bool $clear
     * 
     * @return mixed
     */
    static final public function get(bool $clear = true)
    {
        $alerts = self::searchInSession();

        if(!isset($alerts) || empty($alerts)){
            return null;
        }

        self::setClear($clear);
        if(self::getClear()){
            self::clear();
        }

        $messages = null;
        foreach($alerts as $index => $items){
            $msgs = implode("</br>\n ",$items);
            $messages .= self::template($msgs."\n", $index);
        }

        return $messages;
    }

    /**
     * Limpa a mensagem de alerta
     * 
     *
     * @return object
     */
    static final public function clear()
    {
        self::setClear($clear);
        if(self::getClear()){
            $_SESSION['msgAlert'] = array();
        }
        return self;
    }

    /**
     * Get the value of exists
     */ 
    static final public function exist()
    {
        if(isset($_SESSION['msgAlert']) && !empty($_SESSION['msgAlert'])){
             return true;
        }

        return false;
    }

    /**
     * Get the value of clear
     */ 
    static public function getClear()
    {
        return self::$clear;
    }

    /**
     * Set the value of clear
     *
     * @return  self
     */ 
    static public function setClear($clear)
    {
        if(isset($clear)){
            self::$clear = $clear;
        }
        return self;
    }

    /**
     * Evento destrutor da classe
     */
    public function __destruct()
    {
        self::clear();
    }
}

    