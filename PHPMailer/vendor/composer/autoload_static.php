<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5009bf857b4c3092caec2a394e9034c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite5009bf857b4c3092caec2a394e9034c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5009bf857b4c3092caec2a394e9034c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
