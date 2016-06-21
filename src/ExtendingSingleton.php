<?php

abstract class ExtendingSingleton {
    protected static $_instance = [];

    public static function getInstance() {
        if (static::class == self::class) {
	        return null;
	    }
        
    	if (!isset(static::$_instance[static::class])) {
            static::$_instance[static::class] = new static();
        }

        return static::$_instance[static::class];
    }

    protected function __clone() {}
    protected function __construct() {}
    protected function __wakeup() {}
}

