<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31745e75763258702cd2e1f4765b4d7c
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kingkernel\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kingkernel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31745e75763258702cd2e1f4765b4d7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31745e75763258702cd2e1f4765b4d7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31745e75763258702cd2e1f4765b4d7c::$classMap;

        }, null, ClassLoader::class);
    }
}
