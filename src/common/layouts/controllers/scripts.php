<?php

    namespace heartwood\common\layouts\controllers;

    use driver\control\action;

    class scripts extends action
    {
        const _LOCAL = __DIR__;

        /**
         * Fun��o a ser executada no contexto da action
         *
         * @param array $info
         * @return void
         */
        public function main(array $info)
        {
            self::setLayout(self::getHeartwoodLayouts().'/responses/scripts.phtml');
            return $this->view();
        }
    }

?>