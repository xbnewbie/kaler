<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53dc2d55bb9c5fefb8df009a8156af36
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JeroenDesloovere\\VCard\\' => 23,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JeroenDesloovere\\VCard\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeroendesloovere/vcard/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Behat\\Transliterator' => 
            array (
                0 => __DIR__ . '/..' . '/behat/transliterator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53dc2d55bb9c5fefb8df009a8156af36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53dc2d55bb9c5fefb8df009a8156af36::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit53dc2d55bb9c5fefb8df009a8156af36::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
