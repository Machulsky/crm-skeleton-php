<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44527f160f5c85cfbd12bfca0c1b965c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44527f160f5c85cfbd12bfca0c1b965c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44527f160f5c85cfbd12bfca0c1b965c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
