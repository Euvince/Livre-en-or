<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb67a961b52aeb6f74248a023353d2844
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Euvince\\Exo\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Euvince\\Exo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb67a961b52aeb6f74248a023353d2844::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb67a961b52aeb6f74248a023353d2844::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb67a961b52aeb6f74248a023353d2844::$classMap;

        }, null, ClassLoader::class);
    }
}
