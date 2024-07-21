<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit123f3952f8b49257fd89dfbd7d43b118
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Myproject\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Myproject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit123f3952f8b49257fd89dfbd7d43b118::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit123f3952f8b49257fd89dfbd7d43b118::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit123f3952f8b49257fd89dfbd7d43b118::$classMap;

        }, null, ClassLoader::class);
    }
}
