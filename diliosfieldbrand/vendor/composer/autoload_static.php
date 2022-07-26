<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58a970c65da7861057a72ba23980a4d9
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Juba\\Diliosfieldbrand\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Juba\\Diliosfieldbrand\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit58a970c65da7861057a72ba23980a4d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58a970c65da7861057a72ba23980a4d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58a970c65da7861057a72ba23980a4d9::$classMap;

        }, null, ClassLoader::class);
    }
}
