<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ff3a3a4f8bd4966d07d62acb3e3173f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ff3a3a4f8bd4966d07d62acb3e3173f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ff3a3a4f8bd4966d07d62acb3e3173f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
