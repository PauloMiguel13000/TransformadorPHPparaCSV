<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29ba82f11144d0cd11ffe25c518dae4a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29ba82f11144d0cd11ffe25c518dae4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29ba82f11144d0cd11ffe25c518dae4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29ba82f11144d0cd11ffe25c518dae4a::$classMap;

        }, null, ClassLoader::class);
    }
}
