<?php

namespace heartwood\common\models;

use data\model\model;

class apiTokens extends model
{
    public $table = 'api_tokens';
    public $key   = 'api_token_id';
    public $dicionary = "SELECT api_token_id as value, name as label FROM api_tokens;";

    public function __construct()
    {
        parent::__construct($this->table, $this->key);
    }
}
?>