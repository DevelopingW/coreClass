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
     * ������ ���������� ����������� � �������
     *
     * @var array
     */
    protected $valueArray = [];

    /**
     * ������ ���������� ������� ����������
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
     * �������� ���������� ������� ����������
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
     * ���������� �� ���������� ����������
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
     * ����������� ���������� ����������
     *
     * @param $key
     */
    public function __unset($key)
    {
        unset($this->valueArray[$key]);
    }
}