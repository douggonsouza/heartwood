<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;

    class topMenu extends action
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
            self::setLayout(self::getHeartwoodLayouts().'/responses/topMenu.phtml');
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