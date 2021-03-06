<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit27cf03f6cb4b46e525a9c24a5a52f951
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

        spl_autoload_register(array('ComposerAutoloaderInit27cf03f6cb4b46e525a9c24a5a52f951', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit27cf03f6cb4b46e525a9c24a5a52f951', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit27cf03f6cb4b46e525a9c24a5a52f951::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
