<?php

namespace Givey;

use Givey\Entity\User as UserEntity;

/**
 * Class User
 *
 * @package Givey
 */
class User extends Resource
{
    /**
     * @param $id
     *
     * @return \Givey\Entity\User
     * @throws \Exception
     */
    public static function retrieve($id)
    {
        $response = static::adapter()->get(sprintf('/users/%s', $id));

        return new UserEntity($response['user']);
    }

    /**
     * @param array $params
     *
     * @return array
     * @throws \Exception
     */
    public static function all(array $params = array())
    {
        if (count($params) == 0)
        {
            throw new \Exception('At least one filter is required');
        }

        $response = static::adapter()->get('/users', $params);

        $users = array();
        foreach ($response['users'] as $user) {
            $users[] = new UserEntity($user);
        }

        return $users;
    }
}
