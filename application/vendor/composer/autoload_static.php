<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59b8a7edb23655aa612b1b38463a5db
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite59b8a7edb23655aa612b1b38463a5db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite59b8a7edb23655aa612b1b38463a5db::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
