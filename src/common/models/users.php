<?php

namespace heartwood\common\models;

use data\model\model;
use heartwood\common\models\apiTokens;

class users extends model
{
    public $table = 'users';
    public $key   = 'user_id';
    public $dicionary = "SELECT user_id as value, CONCAT(first_name,' ',last_name) as label FROM users;";

    /**
     * Evento construtor da classe
     */
    public function __construct()
    {
        parent::__construct($this->table, $this->key);
    }

    /**
     * Informações das colunas visíveis
     *
     * @return void
     */
    public function visibleColumns()
    {
        return array(
            'config' => array(
                'name'   => 'config',
                'table'  => 'users',
                'key'    => 'user_id'
            ),
            'user_id' => array(
                'name'  => 'user_id',
                'label' => 'Id',
                'pk'    => true,
                'type'  => 'integer',
            ),
            'checkpoint_identifier' => array(
                'name'  => 'checkpoint_identifier',
                'label' => 'Identificador',
                'pk'    => false,
                'type'  => 'integer',
            ),
            'first_name' => array(
                'name'  => 'first_name',
                'label' => 'Primeiro nome',
                'pk'    => false,
                'type'  => 'varchar',
            ),
            'last_name' => array(
                'name'  => 'last_name',
                'label' => 'Último nome',
                'pk'    => false,
                'type'  => 'varchar',
            ),
            'email' => array(
                'name'  => 'email',
                'label' => 'E-mail',
                'pk'    => false,
                'type'  => 'varchar',
            ),
            'permission_roles_list' => array(
                'name'  => 'permission_roles_list',
                'label' => 'Lista de regras',
                'pk'    => false,
                'type'  => 'varchar',
            ),
            'data_profiles_list' => array(
                'name'  => 'data_profiles_list',
                'label' => 'Lista do perfil',
                'pk'    => false,
                'type'  => 'varchar',
            ),
        );
    } 

    /**
     * Cardinalidade com a tabela api_tokens
     *
     * @return object
     */
    public function apiTokens()
    {
        return $this->oneForMany(new apiTokens(), 'user_id');
    }
}
?>