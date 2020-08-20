<?php

    namespace heartwood\admin\controllers;

    use heartwood\admin\controllers\heartwood;
    use data\resource\resource;
    use heartwood\common\models\users;

    class productsUpdate extends heartwood
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
            $params = $info['url'];
            return $this->view($params);
        }
    }

?>