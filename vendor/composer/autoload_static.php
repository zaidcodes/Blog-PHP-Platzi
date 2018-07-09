<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59feb54a1fd2036e9e66eaa8912e6bbb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59feb54a1fd2036e9e66eaa8912e6bbb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59feb54a1fd2036e9e66eaa8912e6bbb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}