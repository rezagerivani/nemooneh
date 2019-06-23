<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda5ce7263d74d4da02e3b9c4fe425fd4
{
    public static $files = array (
        '4ad677cf23be1eeec8c74951804d4cb0' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hekmatinasser\\Verta\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hekmatinasser\\Verta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda5ce7263d74d4da02e3b9c4fe425fd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda5ce7263d74d4da02e3b9c4fe425fd4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}