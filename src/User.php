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
		throw new \Exception('Not yet implemented');
	}
}
