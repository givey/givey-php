<?php

namespace Givey;

/**
 * Class Entity
 *
 * @package Givey
 */
abstract class Entity
{
    /**
     * @var array
     */
    private $extraParameters = array();

    /**
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->buildParameters($parameters);
    }

    /**
     * @param $key
     *
     * @return mixed
     * @throws \Exception
     */
    public function _get($key)
    {
        if (array_key_exists($key, $this->extraParameters)) {
            return $this->extraParameters[$key];
        }

        throw new \Exception('Param does not exist');
    }

    /**
     * @param $key
     * @param $value
     */
    public function _set($key, $value)
    {
        $this->extraParameters[$key] = $value;
    }

    /**
     * @param array $parameters
     *
     * @return mixed
     */
    abstract protected function buildParameters(array $parameters);
}
