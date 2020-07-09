<?php

    use driver\router\router;

    router::setInfoLocal(LOCAL_TYPE_REQUEST, LOCAL_ROOT, LOCAL_REQUEST);

    // ROTAS
    router::route('GET','/admin/products/update/:number',"heartwood\\admin\\controllers\\productsUpdate");


    die(var_dump($router));
?>