<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6815f7bd50df2fe654147a5367ea8ba5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mtc\\Dhl\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mtc\\Dhl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6815f7bd50df2fe654147a5367ea8ba5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6815f7bd50df2fe654147a5367ea8ba5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6815f7bd50df2fe654147a5367ea8ba5::$classMap;

        }, null, ClassLoader::class);
    }
}