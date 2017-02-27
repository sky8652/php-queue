<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13d66253be4dc1157eb79856d1ec8092
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flc\\Queue\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flc\\Queue\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Queue',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13d66253be4dc1157eb79856d1ec8092::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13d66253be4dc1157eb79856d1ec8092::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
