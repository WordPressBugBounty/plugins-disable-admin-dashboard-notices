<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14707d2608709b9a8432987b2c677154
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPFraternity\\Disable_Admin_Dashboard\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPFraternity\\Disable_Admin_Dashboard\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPFraternity\\Disable_Admin_Dashboard\\Assets' => __DIR__ . '/../..' . '/inc/Assets.php',
        'WPFraternity\\Disable_Admin_Dashboard\\Plugin' => __DIR__ . '/../..' . '/inc/Plugin.php',
        'WPFraternity\\Disable_Admin_Dashboard\\Traits\\Singleton' => __DIR__ . '/../..' . '/inc/traits/Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14707d2608709b9a8432987b2c677154::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14707d2608709b9a8432987b2c677154::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14707d2608709b9a8432987b2c677154::$classMap;

        }, null, ClassLoader::class);
    }
}
