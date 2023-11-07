<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf66b507975a9ed382605d35fd5afbfa6
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'db\\' => 3,
        ),
        'c' => 
        array (
            'config\\' => 7,
        ),
        'a' => 
        array (
            'auth\\' => 5,
            'admin\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'db\\' => 
        array (
            0 => __DIR__ . '/../..' . '/db',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'auth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/auth',
        ),
        'admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'admin\\SessionUser' => __DIR__ . '/../..' . '/admin/SessionUser.php',
        'auth\\DatabaseManager' => __DIR__ . '/../..' . '/auth/DatabaseManager.php',
        'config\\ConfigHandler' => __DIR__ . '/../..' . '/config/ConfigHandler.php',
        'db\\Animal' => __DIR__ . '/../..' . '/db/Animal.php',
        'db\\Section' => __DIR__ . '/../..' . '/db/Section.php',
        'db\\Species' => __DIR__ . '/../..' . '/db/Species.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf66b507975a9ed382605d35fd5afbfa6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf66b507975a9ed382605d35fd5afbfa6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf66b507975a9ed382605d35fd5afbfa6::$classMap;

        }, null, ClassLoader::class);
    }
}
