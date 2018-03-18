<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit403795c41a6622b33aa9c20fb8b6f9dc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit403795c41a6622b33aa9c20fb8b6f9dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit403795c41a6622b33aa9c20fb8b6f9dc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}