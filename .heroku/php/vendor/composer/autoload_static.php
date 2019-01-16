<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6172d09210a384b4fd7a97a1945c72fd
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heroku\\Buildpack\\PHP\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heroku\\Buildpack\\PHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/heroku/installer-plugin/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6172d09210a384b4fd7a97a1945c72fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6172d09210a384b4fd7a97a1945c72fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
