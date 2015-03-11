<?php

namespace Givey;

use Givey\Entity\User as UserEntity;

class User extends Resource
{
    public static function retrieve($id)
    {
        $response = static::adapter()->get(sprintf('/users/%s', $id));

        return new UserEntity($response['user']);
    }

    public static function all(array $params = array())
    {
        $response = static::adapter()->get('/users', $params);

        $users = array();
        foreach ($response['users'] as $user) {
            $users[] = new UserEntity($user);
        }

        return $users;
    }
}
