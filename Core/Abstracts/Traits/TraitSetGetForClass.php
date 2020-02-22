<?php

namespace DevelopingW\CoreClass\Abstracts\Traits;

/**
 * Trait TraitSetGetForClass
 *
 * @package DevelopingW\CoreClass\Abstracts\Traits
 * @author Anton Kalochelitis developing.w@gmail.com
 */
trait TraitSetGetForClass
{
    /**
     * —писок переменных сохраненных в массиве
     *
     * @var array
     */
    protected $valueArray = [];

    /**
     * «адаем магическим методом переменную
     *
     * @param $key
     * @param $value
     *
     * @return void
     */
    public function __set($key, $value)
    {
        $this->valueArray[$key] = $value;
    }

    /**
     * ѕолучаем магическим методом переменную
     *
     * @param $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->valueArray[$key])) {
            return $this->valueArray[$key];
        }
    }

    /**
     * —уществует ли магическа€ переменна€
     *
     * @param $key
     *
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this->valueArray[$key]);
    }

    /**
     * ”ничтожение магической переменной
     *
     * @param $key
     */
    public function __unset($key)
    {
        unset($this->valueArray[$key]);
    }
}