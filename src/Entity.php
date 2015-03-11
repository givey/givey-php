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
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->buildParameters($parameters);
    }

    /**
     * @param array $parameters
     *
     * @return mixed
     */
    abstract protected function buildParameters(array $parameters);
}
