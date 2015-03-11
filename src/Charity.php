<?php

namespace Givey;

use Givey\Entity\Charity as CharityEntity;

class Charity extends Resource
{
    public static function retrieve($id)
    {
        $response = static::adapter()->get(sprintf('/charities/%s', $id));

        return new CharityEntity($response['charity']);
    }

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
