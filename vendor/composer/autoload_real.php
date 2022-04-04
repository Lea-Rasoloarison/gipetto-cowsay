<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf0bd37c5312d54badedd5e75ed9069dc
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

        spl_autoload_register(array('ComposerAutoloaderInitf0bd37c5312d54badedd5e75ed9069dc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf0bd37c5312d54badedd5e75ed9069dc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitf0bd37c5312d54badedd5e75ed9069dc::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
