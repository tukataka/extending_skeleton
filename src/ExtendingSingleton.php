<?php

abstract class ExtendingSingleton {
    private static $_instance = [];

    public static function getInstance() {
        if (static::class == self::class) {
	        return null;
	    }
        
    	if (!isset(self::$_instance[static::class])) {
            self::$_instance[static::class] = new static();
        }

        return self::$_instance[static::class];
    }

    public function __call($name, $arguments) {
        return self::$_instance[static::class]->_container->$name($arguments);
    }

    protected function __clone() {}
    protected function __construct() {}
    protected function __wakeup() {}
}