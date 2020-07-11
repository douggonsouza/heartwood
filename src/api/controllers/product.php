<?php

    namespace heartwood\api\controllers;

    use driver\control\action;

    class product extends action
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
            $params = $info['url'];
            return $this->json($params);
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