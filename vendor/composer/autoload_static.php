<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e8a8ec98e6d8addbf57010554f991bc
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Freshwork\\Transbank\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Freshwork\\Transbank\\' => 
        array (
            0 => __DIR__ . '/..' . '/freshwork/transbank/src',
        ),
    );

    public static $classMap = array (
        'WSSESoap' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/soap-wsse.php',
        'XMLSecEnc' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityDSig' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
        'XMLSecurityKey' => __DIR__ . '/..' . '/freshwork/transbank/src/wss/xmlseclibs.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e8a8ec98e6d8addbf57010554f991bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e8a8ec98e6d8addbf57010554f991bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e8a8ec98e6d8addbf57010554f991bc::$classMap;

        }, null, ClassLoader::class);
    }
}