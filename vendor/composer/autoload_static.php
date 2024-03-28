<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf4899d8c8c3211fb91d990d8c785d95
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf4899d8c8c3211fb91d990d8c785d95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf4899d8c8c3211fb91d990d8c785d95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf4899d8c8c3211fb91d990d8c785d95::$classMap;

        }, null, ClassLoader::class);
    }
}
