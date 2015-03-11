<?php

namespace Givey;

abstract class Entity
{
    private $extraParameters = array();

    public function __construct($parameters)
    {
        $this->buildParameters($parameters);
    }

    public function _get($key)
    {
        if (array_key_exists($key, $this->extraParameters)) {
            return $this->extraParameters[$key];
        }

        throw new \Exception('Param does not exist');
    }

    public function _set($key, $value)
    {
        $this->extraParameters[$key] = $value;
    }

    abstract protected function buildParameters(array $parameters);
}
