<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c5aa9023dd553b60eb18196e34972dd
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1c5aa9023dd553b60eb18196e34972dd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1c5aa9023dd553b60eb18196e34972dd::$classMap;

        }, null, ClassLoader::class);
    }
}
