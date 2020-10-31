<?php

    namespace heartwood\admin\controllers;

    use heartwood\admin\controllers\heartwood;
    use standard_xml\admin\controllers\standard;

    class dashboard extends heartwood
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
            self::setLayout(self::getHeartwoodLayouts().'/cooladmin1.phtml');

            $xml = array(
                'age' => 52,
                'db' => array(
                    'host'   => array(
                        'schema' => 'heartwood',
                        'name'   => 'localhost',
                        'port'   => 3316
                    ),
                    'user'  => 'douggonsouza',
                    'password' => 'Ds@468677'
                ),
                'firstname' => 'Douglas',
                'lastname'  => 'Souza'
            );

            standard::load(standard::MIME_XML);
            // $content = standard::getFile()->start('config');
            // standard::getFile()->addElement('document');
            // standard::getFile()->addElement('schema','heartwood', null, standard::getFIle()->getElement('document')->item(0));
            standard::getFile()->ofArray($xml, 'document');
            $content = standard::content();

            return $this->view();
        }
    }

?>