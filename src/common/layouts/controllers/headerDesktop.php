<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;

    class headerDesktop extends action
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
            self::setLayout(self::getHeartwoodLayouts().'/responses/headerDesktop.phtml');
            return $this->view();
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