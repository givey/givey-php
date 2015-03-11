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
        throw new \Exception('Not yet implemented');
    }
}
