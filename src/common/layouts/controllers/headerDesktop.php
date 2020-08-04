<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;

    class headerDesktop extends action
    {
        const _LOCAL = __DIR__;

        /**
         * Função a ser executada no contexto da action
         *
         * @param array $info
         * @return void
         */
        public function main(array $info)
        {
            self::setLayout(self::getHeartwoodLayouts().'/responses/headerDesktop.phtml');

            if(empty(new \comunication\common\models\comunications())){
                return $this->view(array('isModule' => false));
            }

            // comments
            $this->param('comments', (new \comunication\common\models\comunications())->comunicationByQuality(1, 1));
            // e-mails
            $this->param('emails', (new \comunication\common\models\comunications())->comunicationByQuality(2, 1));
            // notifications
            $this->param('notifications',(new \comunication\common\models\comunications())->comunicationByQuality(3, 1));

            return $this->view(array('isModule' => true));
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