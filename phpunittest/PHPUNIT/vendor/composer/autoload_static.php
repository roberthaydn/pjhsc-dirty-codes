<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5ac07d7ceda4696ae9fa38bb476f2e6
{
    public static $classMap = array (
        'App\\Libraries\\Calculator' => __DIR__ . '/../..' . '/app/libraries/Calculator.php',
        'App\\Libraries\\String' => __DIR__ . '/../..' . '/app/libraries/String.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita5ac07d7ceda4696ae9fa38bb476f2e6::$classMap;

        }, null, ClassLoader::class);
    }
}
