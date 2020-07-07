<?php

    /*
     * CARREGAR DADOS GLOBAIS DE ACESSO
     * 
     * Nuclear Framework - PHP
     * @author Douglas GonÃ§alves de Souza
     * 
     * Configura INI para apresentaÃ§Ã£o dos erros
	 * E_ERROR
	 * E_WARNING
	 * E_PARSE
	 * E_NOTICE
	 * E_CORE_ERROR
	 * E_CORE_WARNING
	 * E_COMPILE_ERROR
	 * E_COMPILE_WARNING
	 * E_USER_ERROR
	 * E_USER_WARNING
	 * E_USER_NOTICE
	 * E_ALL
	 * E_STRICT
	 * E_RECOVERABLE_ERROR
     */
	error_reporting(1);
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);

    // Esse arquivo e pasta é gerado depois de instalação da biblioteca descrita acima
    include_once __DIR__ . '/vendor/autoload.php';

	// Iniciando variaveis ENV
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

    // var_dump(getenv('PROJECT_NAME'));
    // var_dump($_ENV['PROJECT_NAME']);

	// autoloader
	// include "vendor/autoload.php";
    // include defines
    // include "root/defines.php";

    // inicia app
    include VA."/src/app/load.php";
?>
