<?php

    // REGEX
    // :number = somente números = (\d+)
    // :char   = somente letras  = ([a-zA-Z]+)
    // :alfanumeric = letras e números = ([a-zA-Z0-9]+)
    // :string = letras, espaço e caracteres especiais = ([a-zA-Z0-9 .\-\_]+)

    use driver\router\router;

    router::setInfoLocal(PROTOCOL,LOCAL_TYPE_REQUEST, LOCAL_ROOT, LOCAL_REQUEST);

    // ROTAS ADMIN
    router::route('GET','/',"heartwood\\admin\\controllers\\dashboard");

    router::route('GET','/admin/permissions/profile',"permission\\admin\\controllers\\profile");
    router::route('POST','/admin/permissions/profile',"permission\\admin\\controllers\\profile");
    router::route('GET','/admin/permissions/profileNew',"permission\\admin\\controllers\\profileNew");
    router::route('POST','/admin/permissions/profileNew',"permission\\admin\\controllers\\profileNew");
    router::route('GET','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");
    router::route('POST','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");

    router::route('GET','/admin/permissions/action',"permission\\admin\\controllers\\action");
    router::route('POST','/admin/permissions/action',"permission\\admin\\controllers\\action");
    router::route('GET','/admin/permissions/actionNew',"permission\\admin\\controllers\\actionNew");
    router::route('POST','/admin/permissions/actionNew',"permission\\admin\\controllers\\actionNew");
    router::route('GET','/admin/permissions/action/:number',"permission\\admin\\controllers\\actionUpdate");
    router::route('POST','/admin/permissions/action/:number',"permission\\admin\\controllers\\actionUpdate");

    router::route('GET','/admin/permissions/permission',"permission\\admin\\controllers\\permission");
    router::route('POST','/admin/permissions/permission',"permission\\admin\\controllers\\permission");
    router::route('GET','/admin/permissions/permissionNew',"permission\\admin\\controllers\\permissionNew");
    router::route('POST','/admin/permissions/permissionNew',"permission\\admin\\controllers\\permissionNew");
    router::route('GET','/admin/permissions/permission/:number',"permission\\admin\\controllers\\permissionUpdate");
    router::route('POST','/admin/permissions/permission/:number',"permission\\admin\\controllers\\permissionUpdate");

    router::route('GET','/admin/permissions/area',"permission\\admin\\controllers\\area");
    router::route('POST','/admin/permissions/area',"permission\\admin\\controllers\\area");
    router::route('GET','/admin/permissions/areaNew',"permission\\admin\\controllers\\areaNew");
    router::route('POST','/admin/permissions/areaNew',"permission\\admin\\controllers\\areaNew");
    router::route('GET','/admin/permissions/area/:number',"permission\\admin\\controllers\\areaUpdate");
    router::route('POST','/admin/permissions/area/:number',"permission\\admin\\controllers\\areaUpdate");

    // ROTAS API
    router::route(
        'GET',
        '/api/products/product/:number',
        "heartwood\\api\\controllers\\product",
        'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
    );

    exit(router::http_response_code(404));
?>