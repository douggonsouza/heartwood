<?php

    namespace heartwood\admin\controllers;

    use driver\control\action;
    use data\resource\resource;
    use heartwood\common\models\users;

    class productsUpdate extends action
    {
        const _LOCAL = __DIR__;

        /**
         * Funчуo a ser executada no contexto da action
         *
         * @param array $info
         * @return void
         */
        public function main(array $info)
        {
            $users = new users();
            $dicionary = $users->dicionary();
            if(empty($dicionary)){
                $error = $users->getError();
            }

            $params = $info['url'];
            return $this->view($params);
        }

        /**
         * Para ser disparado antes
         *
         * @return void
         */
        public function _before()
        {

        }

        /**
         * Para ser disparado depois
         *
         * @return void
         */
        public function _after()
        {

        }
    }

?>