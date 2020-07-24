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

    router::route('GET','/admin/permissions/profile',"permission\\admin\\controllers\\profileList");
    router::route('POST','/admin/permissions/profile',"permission\\admin\\controllers\\profileList");
    router::route('GET','/admin/permissions/profile/new',"permission\\admin\\controllers\\profile");
    router::route('GET','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");
    router::route('POST','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");

    router::route('GET','/admin/permissions/action',"permission\\admin\\controllers\\actionList");
    router::route('GET','/admin/permissions/action/new',"permission\\admin\\controllers\\action");
    router::route('GET','/admin/permissions/action/:number',"permission\\admin\\controllers\\actionUpdate");

    router::route('GET','/admin/permissions/permission',"permission\\admin\\controllers\\permissionList");
    router::route('GET','/admin/permissions/permission/new',"permission\\admin\\controllers\\permission");
    router::route('GET','/admin/permissions/permission/:number',"permission\\admin\\controllers\\permissionUpdate");

    router::route('GET','/admin/permissions/area',"permission\\admin\\controllers\\areaList");
    router::route('GET','/admin/permissions/area/new',"permission\\admin\\controllers\\area");
    router::route('GET','/admin/permissions/area/:number',"permission\\admin\\controllers\\areaUpdate");

    // ROTAS API
    router::route(
        'GET',
        '/api/products/product/:number',
        "heartwood\\api\\controllers\\product",
        'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
    );

    exit(router::http_response_code(404));
?>