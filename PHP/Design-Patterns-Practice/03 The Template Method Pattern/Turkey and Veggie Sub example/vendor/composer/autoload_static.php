<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd18fa484fd45f090cb2ac426752ad51
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd18fa484fd45f090cb2ac426752ad51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd18fa484fd45f090cb2ac426752ad51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
