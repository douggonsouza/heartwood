<?php

    use driver\router\router;

    router::setInfoLocal(LOCAL_TYPE_REQUEST, LOCAL_ROOT, LOCAL_REQUEST);

    // ROTAS ADMIN
    router::route('GET','/admin/products/update/:number',"heartwood\\admin\\controllers\\productsUpdate");

    // ROTAS API
    router::route('GET','/api/products/product/:number',"heartwood\\api\\controllers\\product");

    exit();
?>