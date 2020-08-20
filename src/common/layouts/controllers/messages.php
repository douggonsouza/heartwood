<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;
    use alerts\alerts\alerts;

    class messages extends action
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
            self::setLayout(self::getHeartwoodLayouts().'/responses/messages.phtml');

            $messages = null;
            if(alerts::exist()){
                $messages = alerts::get();
            }

            return $this->view(array(
                'messages' => $messages
            ));
        }
    }

?>