<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6af50f730ffe2b8854f567339591aa50
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6af50f730ffe2b8854f567339591aa50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6af50f730ffe2b8854f567339591aa50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6af50f730ffe2b8854f567339591aa50::$classMap;

        }, null, ClassLoader::class);
    }
}