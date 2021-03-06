<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e234d3f9c20baed80f6d57da9fdba3f
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/server',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\config\\DatabaseHandler' => __DIR__ . '/../..' . '/server/config/DatabaseHandler.php',
        'app\\config\\MysqlDBH' => __DIR__ . '/../..' . '/server/config/MysqlDBH.php',
        'app\\dto\\Response' => __DIR__ . '/../..' . '/server/dto/Response.php',
        'app\\helper\\Validation' => __DIR__ . '/../..' . '/server/helper/Validation.php',
        'app\\user\\User' => __DIR__ . '/../..' . '/server/user/User.php',
        'app\\user\\UserController' => __DIR__ . '/../..' . '/server/user/UserController.php',
        'app\\user\\UserData' => __DIR__ . '/../..' . '/server/user/UserData.php',
        'app\\user\\UserDataInterface' => __DIR__ . '/../..' . '/server/user/UserDataInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e234d3f9c20baed80f6d57da9fdba3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e234d3f9c20baed80f6d57da9fdba3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e234d3f9c20baed80f6d57da9fdba3f::$classMap;

        }, null, ClassLoader::class);
    }
}
