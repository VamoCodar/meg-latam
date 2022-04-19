<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3673ea28971d6f715a307d8dfa65e6e8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Source',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3673ea28971d6f715a307d8dfa65e6e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3673ea28971d6f715a307d8dfa65e6e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3673ea28971d6f715a307d8dfa65e6e8::$classMap;

        }, null, ClassLoader::class);
    }
}