<?php

	abstract class Singleton {
        protected static $_instance = [];

        public static function getInstance() {
            if (!isset(static::$_instance[static::class])) {
                static::$_instance[static::class] = new static();
            }

            return static::$_instance[static::class];
        }

        protected function __clone() {}
        protected function __construct() {}
        protected function __wakeup() {}
    }