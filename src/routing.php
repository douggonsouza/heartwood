<?php

    // REGEX
    // :number = somente números
    // :char   = somente letras
    // :alfanumeric = letras e números
    // :string = letras, espaço e caracteres especiais

    use driver\router\router;

    router::setInfoLocal(PROTOCOL,LOCAL_TYPE_REQUEST, LOCAL_ROOT, LOCAL_REQUEST);

    // ROTAS ADMIN
    router::route('GET','/',"heartwood\\admin\\controllers\\dashboard");

    // Profiles
    router::route('GET','/admin/permissions/profile',"permission\\admin\\controllers\\profile");
    router::route('POST','/admin/permissions/profile',"permission\\admin\\controllers\\profile");
    router::route('GET','/admin/permissions/profileNew',"permission\\admin\\controllers\\profileNew");
    router::route('POST','/admin/permissions/profileNew',"permission\\admin\\controllers\\profileNew");
    router::route('GET','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");
    router::route('POST','/admin/permissions/profile/:number',"permission\\admin\\controllers\\profileUpdate");
    router::route('GET','/admin/permissions/profileDelete/:number',"permission\\admin\\controllers\\profileDelete");
    router::route('POST','/admin/permissions/profileDelete/:number',"permission\\admin\\controllers\\profileDelete");

    // Actions
    router::route('GET','/admin/permissions/action',"permission\\admin\\controllers\\action");
    router::route('POST','/admin/permissions/action',"permission\\admin\\controllers\\action");
    router::route('GET','/admin/permissions/actionNew',"permission\\admin\\controllers\\actionNew");
    router::route('POST','/admin/permissions/actionNew',"permission\\admin\\controllers\\actionNew");
    router::route('GET','/admin/permissions/action/:number',"permission\\admin\\controllers\\actionUpdate");
    router::route('POST','/admin/permissions/action/:number',"permission\\admin\\controllers\\actionUpdate");
    router::route('GET','/admin/permissions/actionDelete/:number',"permission\\admin\\controllers\\actionDelete");
    router::route('POST','/admin/permissions/actionDelete/:number',"permission\\admin\\controllers\\actionDelete");

    // Permissions
    router::route('GET','/admin/permissions/permission',"permission\\admin\\controllers\\permission");
    router::route('POST','/admin/permissions/permission',"permission\\admin\\controllers\\permission");
    router::route('GET','/admin/permissions/permissionNew',"permission\\admin\\controllers\\permissionNew");
    router::route('POST','/admin/permissions/permissionNew',"permission\\admin\\controllers\\permissionNew");
    router::route('GET','/admin/permissions/permission/:number/:number',"permission\\admin\\controllers\\permissionUpdate");
    router::route('POST','/admin/permissions/permission/:number/:number',"permission\\admin\\controllers\\permissionUpdate");
    router::route('GET','/admin/permissions/permissionDelete/:number/:number',"permission\\admin\\controllers\\permissionDelete");
    router::route('POST','/admin/permissions/permissionDelete/:number/:number',"permission\\admin\\controllers\\permissioDelete");

    // Areas
    router::route('GET','/admin/permissions/area',"permission\\admin\\controllers\\area");
    router::route('POST','/admin/permissions/area',"permission\\admin\\controllers\\area");
    router::route('GET','/admin/permissions/areaNew',"permission\\admin\\controllers\\areaNew");
    router::route('POST','/admin/permissions/areaNew',"permission\\admin\\controllers\\areaNew");
    router::route('GET','/admin/permissions/area/:number',"permission\\admin\\controllers\\areaUpdate");
    router::route('POST','/admin/permissions/area/:number',"permission\\admin\\controllers\\areaUpdate");
    router::route('GET','/admin/permissions/areaDelete/:number',"permission\\admin\\controllers\\areaDelete");
    router::route('POST','/admin/permissions/areaDelete/:number',"permission\\admin\\controllers\\areaDelete");

    // COMUNICAÇÕES

    // Comunications
    router::route('GET','/admin/comunications/comunication',"comunication\\admin\\controllers\\comunication");
    router::route('POST','/admin/comunications/comunication',"comunication\\admin\\controllers\\comunication");
    router::route('GET','/admin/comunications/comunicationNew',"comunication\\admin\\controllers\\comunicationNew");
    router::route('POST','/admin/comunications/comunicationNew',"comunication\\admin\\controllers\\comunicationNew");
    router::route('GET','/admin/comunications/comunication/:number',"comunication\\admin\\controllers\\comunicationUpdate");
    router::route('POST','/admin/comunications/comunication/:number',"comunication\\admin\\controllers\\comunicationUpdate");
    router::route('GET','/admin/comunications/comunicationDelete/:number',"comunication\\admin\\controllers\\comunicationDelete");
    router::route('POST','/admin/comunications/comunicationDelete/:number',"comunication\\admin\\controllers\\comunicationDelete");

    // qualitys
    router::route('GET','/admin/comunications/quality',"comunication\\admin\\controllers\\quality");
    router::route('POST','/admin/comunications/quality',"comunication\\admin\\controllers\\quality");
    router::route('GET','/admin/comunications/qualityNew',"comunication\\admin\\controllers\\qualityNew");
    router::route('POST','/admin/comunications/qualityNew',"comunication\\admin\\controllers\\qualityNew");
    router::route('GET','/admin/comunications/quality/:number',"comunication\\admin\\controllers\\qualityUpdate");
    router::route('POST','/admin/comunications/quality/:number',"comunication\\admin\\controllers\\qualityUpdate");
    router::route('GET','/admin/comunications/qualityDelete/:number',"comunication\\admin\\controllers\\qualityDelete");
    router::route('POST','/admin/comunications/qualityDelete/:number',"comunication\\admin\\controllers\\qualityDelete");

    // ACCOUNTS

    // accounts
    router::route('GET','/admin/accounts/account',"account\\admin\\controllers\\account");
    router::route('POST','/admin/accounts/account',"account\\admin\\controllers\\account");
    router::route('GET','/admin/accounts/accountNew',"account\\admin\\controllers\\accountNew");
    router::route('POST','/admin/accounts/accountNew',"account\\admin\\controllers\\accountNew");
    router::route('GET','/admin/accounts/account/:number',"account\\admin\\controllers\\accountUpdate");
    router::route('POST','/admin/accounts/account/:number',"account\\admin\\controllers\\accountUpdate");
    router::route('GET','/admin/accounts/accountDelete/:number',"account\\admin\\controllers\\accountDelete");
    router::route('POST','/admin/accounts/accountDelete/:number',"account\\admin\\controllers\\accounDelete");
    router::route('GET','/admin/accounts/setting/:number',"account\\admin\\controllers\\setting");
    router::route('GET','/admin/accounts/login',"account\\admin\\controllers\\login");
    router::route('POST','/admin/accounts/login',"account\\admin\\controllers\\login");
    router::route('GET','/admin/accounts/logout',"account\\admin\\controllers\\logout");


    // ROTAS API
    router::route(
        'GET',
        '/api/products/product/:number',
        "heartwood\\api\\controllers\\product",
        'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9'
    );

    exit(router::http_response_code(404));
?>