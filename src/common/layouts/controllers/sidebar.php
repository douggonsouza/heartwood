<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;
    use permission\common\models\menus;

    class sidebar extends action
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
            self::setLayout(self::getHeartwoodLayouts().'/responses/sidebar.phtml');

            return $this->view();
        }
    }

?>