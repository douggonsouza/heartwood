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