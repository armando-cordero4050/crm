<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8794f599455bfb7afd50c33a48602c6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8794f599455bfb7afd50c33a48602c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8794f599455bfb7afd50c33a48602c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8794f599455bfb7afd50c33a48602c6::$classMap;

        }, null, ClassLoader::class);
    }
}