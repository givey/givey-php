<?php

namespace Givey;

use Givey\Entity\Business as BusinessEntity;

/**
 * Class Business
 *
 * @package Givey
 */
class Business extends Resource
{
    /**
     * @param $id
     *
     * @return \Givey\Entity\Business
     * @throws \Exception
     */
    public static function retrieve($id)
    {
        $response = static::adapter()->get(sprintf('/businesses/%s', $id));

        return new BusinessEntity($response['business']);
    }

    /**
     * @param array $params
     *
     * @return void
     * @throws \Exception
     */
    public static function all(array $params = array())
    {
        throw new \Exception('Not yet implemented');
    }
}
