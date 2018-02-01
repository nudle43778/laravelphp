<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61013c2e8151c47710c1ecc0103d9b28
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modernways\\Identity\\' => 20,
            'RedMind\\Mvc\\' => 12,
            'RedMind\\Dialog\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modernways\\Identity\\' => 
        array (
            0 => __DIR__ . '/..' . '/modernways/identity/src',
        ),
        'Modernways\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/modernways/mvc/src',
        ),
        'RedMind\\Dialog\\' => 
        array (
            0 => __DIR__ . '/..' . '/redmind/dialog/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61013c2e8151c47710c1ecc0103d9b28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61013c2e8151c47710c1ecc0103d9b28::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}