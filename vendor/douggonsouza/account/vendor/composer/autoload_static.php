<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6321e2c00adb3a3b997acf43160023f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'account\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'account\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'account\\admin\\controllers\\account' => __DIR__ . '/../..' . '/src/admin/controllers/account.php',
        'account\\admin\\controllers\\accountDelete' => __DIR__ . '/../..' . '/src/admin/controllers/accountDelete.php',
        'account\\admin\\controllers\\accountNew' => __DIR__ . '/../..' . '/src/admin/controllers/accountNew.php',
        'account\\admin\\controllers\\accountUpdate' => __DIR__ . '/../..' . '/src/admin/controllers/accountUpdate.php',
        'account\\admin\\controllers\\address' => __DIR__ . '/../..' . '/src/admin/controllers/address.php',
        'account\\admin\\controllers\\addressDelete' => __DIR__ . '/../..' . '/src/admin/controllers/addressDelete.php',
        'account\\admin\\controllers\\addressNew' => __DIR__ . '/../..' . '/src/admin/controllers/addressNew.php',
        'account\\admin\\controllers\\addressUpdate' => __DIR__ . '/../..' . '/src/admin/controllers/addressUpdate.php',
        'account\\admin\\controllers\\headerAccount' => __DIR__ . '/../..' . '/src/admin/controllers/headerAccount.php',
        'account\\admin\\controllers\\headerDesktopAccount' => __DIR__ . '/../..' . '/src/admin/controllers/headerDesktopAccount.php',
        'account\\admin\\controllers\\login' => __DIR__ . '/../..' . '/src/admin/controllers/login.php',
        'account\\admin\\controllers\\logout' => __DIR__ . '/../..' . '/src/admin/controllers/logout.php',
        'account\\admin\\controllers\\setting' => __DIR__ . '/../..' . '/src/admin/controllers/setting.php',
        'account\\common\\managments\\upload' => __DIR__ . '/../..' . '/src/common/managments/upload.php',
        'account\\common\\models\\addresses' => __DIR__ . '/../..' . '/src/common/models/addresses.php',
        'account\\common\\models\\users' => __DIR__ . '/../..' . '/src/common/models/users.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6321e2c00adb3a3b997acf43160023f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6321e2c00adb3a3b997acf43160023f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6321e2c00adb3a3b997acf43160023f::$classMap;

        }, null, ClassLoader::class);
    }
}