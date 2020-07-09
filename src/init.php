<?php
    // DEFINIЧеES DE PASTA
    // DS - Separador de Pasta
    define('DS',DIRECTORY_SEPARATOR);
    // Pasta Root
    define('DIR_ROOT',str_replace(array('\\','/'),DS,$_SERVER['DOCUMENT_ROOT']));
    // Recorte sem separador de pasta no final da Pasta Root
    if((strrpos(DIR_ROOT,DS)+1)==(strlen(DIR_ROOT)))
        define('DIR_ROOT',substr((str_replace(array('\\','/'),DS,$_SERVER['DOCUMENT_ROOT'])),0,strlen((str_replace(array('\\','/'),DS,$_SERVER['DOCUMENT_ROOT'])))-1));
    // Pasta models
    define('DIR_MODELS',DIR_ROOT.DS.'src'.DS.'common'.DS.'models');
    // Pasta assets
    define('DIR_ASSETS',DIR_ROOT.DS.'src'.DS.'common'.DS.'assets');
    // Pasta managments
    define('DIR_MANAGMENTS',DIR_ROOT.DS.'src'.DS.'common'.DS.'managments');
    // Pasta layout
    define('DIR_LAYOUTS',DIR_ROOT.DS.'src'.DS.'common'.DS.'layouts');

    // DEFINIЧеES DE URL
    // Protocolo utilizado na requisiчуo
    define('PROTOCOL', strtolower(explode('/',$_SERVER['SERVER_PROTOCOL'])[0]).'://');
    // Host requerido
    define('LOCAL_ROOT',$_SERVER['HTTP_HOST']);
    // Requisiчуo
    define('LOCAL_REQUEST',$_SERVER['REQUEST_URI']);
    // Tipo de requisiчуo
    define('LOCAL_TYPE_REQUEST', $_SERVER['REQUEST_METHOD']);
?>