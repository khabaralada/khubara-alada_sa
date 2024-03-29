<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita592692d04baa299c78133f1c66da857
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'S' => 
        array (
            'Salla\\ZATCA\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'Salla\\ZATCA\\' => 
        array (
            0 => __DIR__ . '/..' . '/salla/zatca/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita592692d04baa299c78133f1c66da857::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita592692d04baa299c78133f1c66da857::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
