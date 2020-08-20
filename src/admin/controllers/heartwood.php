<?php

    namespace heartwood\admin\controllers;

    use driver\control\action;
    use driver\router\router;
    use alerts\alerts\alerts;

    class heartwood extends action
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
            return $this->view();
        }

        /**
         * Para ser disparado antes
         *
         * @return void
         */
        public function _before()
        {
            if(!$this->isLogin()){
                alerts::set('Não existe usuário logado.', alerts::BADGE_DANGER);
                router::relativeRedirection('/admin/accounts/login');
            }
        }

        public function isLogin()
        {
            return isset($_SESSION['login'])? true: false;
        }
    }

?>