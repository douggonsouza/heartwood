<?php

    namespace heartwood\admin\controllers;

    use heartwood\admin\controllers\heartwood;

    class dashboard extends heartwood
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
            self::setLayout(self::getHeartwoodLayouts().'/cooladmin1.phtml');
            return $this->view();
        }
    }

?>