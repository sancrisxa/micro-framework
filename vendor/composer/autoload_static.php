<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6167b44b836dc88d68aa5e51c6a08fd5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6167b44b836dc88d68aa5e51c6a08fd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6167b44b836dc88d68aa5e51c6a08fd5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
