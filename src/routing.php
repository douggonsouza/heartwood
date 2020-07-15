<?php

    use driver\router\router;

    router::setInfoLocal(PROTOCOL,LOCAL_TYPE_REQUEST, LOCAL_ROOT, LOCAL_REQUEST);

    // ROTAS ADMIN
    router::route('GET','/',"heartwood\\admin\\controllers\\productsUpdate");
    router::route('GET','/admin/products/update/:number',"heartwood\\admin\\controllers\\productsUpdate");

    // ROTAS API
    router::route(
        'GET',
        '/api/products/product/:number',
        "heartwood\\api\\controllers\\product",
        'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
    );

    exit(router::http_response_code(404));
?>