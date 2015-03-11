<?php

namespace Givey;

use Givey\Entity\Charity as CharityEntity;

/**
 * Class Charity
 *
 * @package Givey
 */
class Charity extends Resource
{
    /**
     * @param $id
     *
     * @return \Givey\Entity\Charity
     * @throws \Exception
     */
    public static function retrieve($id)
    {
        $response = static::adapter()->get(sprintf('/charities/%s', $id));

        return new CharityEntity($response['charity']);
    }

    /**
     * @param array $params
     *
     * @return array
     * @throws \Exception
     */
    public static function all(array $params = array())
    {
        $response = static::adapter()->get('/charities', $params);

        $charities = array();
        foreach ($response['charities'] as $charity) {
            $charities[] = new CharityEntity($charity);
        }

        return $charities;
    }
}
