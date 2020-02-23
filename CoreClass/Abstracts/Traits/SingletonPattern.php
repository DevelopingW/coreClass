<?php

namespace DevelopingW\CoreClass\Abstracts\Traits;

/**
 * Trait SingletonPattern
 *
 * Трейт используем для создания объекта Singleton
 *
 * @package DevelopingW\CoreClass\Abstracts\Traits
 * @author Anton Kalochelitis developing.w@gmail.com
 */
trait SingletonPattern {
    /**
     * Защищаем от создания через new Class
     *
     * @param array $params
     */
    final protected function __construct(array $params = [])
    {
        static::init($params);
    }

    /**
     * @param array $params
     */
    protected static function init(array $params = []) {}

    /**
     * Защищаем от создания через клонирование
     */
    protected function __clone()
    {/* ... @return SingletonPattern */}

    /**
     * Защищаем от создания через unserialize
     */
    protected function __wakeup()
    {/* ... @return SingletonPattern */}

    protected static $instance    =   null;

    /**
     * @param array $params
     *
     * @return SingletonPattern
     */
    final public static function getInstance(array $params = [])
    {
        return null === static::$instance ? static::$instance = new static($params) : static::$instance;
    }

    /**
     * @param array $params
     *
     * @return SingletonPattern
     */
    final public static function clean(array $params = [])
    {
        return static::$instance = new static($params);
    }
}
