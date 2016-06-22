<?php

abstract class ExtendingSingleton
{
    private static $_instance = [];

    public static function getInstance()
    {
        if (static::class == self::class) {
	        return null;
	    }
        
    	if (!isset(self::$_instance[static::class])) {
            self::$_instance[static::class] = static::create();
        }

        return self::$_instance[static::class];
    }

    protected function create()
    {
        return null;
    }

    protected function __clone() {}
    protected function __construct() {}
    protected function __wakeup() {}
}