<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfc9d9af673e43bba1d5bac7d19fd5ea8
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfc9d9af673e43bba1d5bac7d19fd5ea8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfc9d9af673e43bba1d5bac7d19fd5ea8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfc9d9af673e43bba1d5bac7d19fd5ea8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
