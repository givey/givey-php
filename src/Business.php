<?php

namespace Givey;

use Givey\Entity\Business as BusinessEntity;
use Givey\Resource;

class Business extends Resource
{
	public static function retrieve($id)
	{
		$response = static::adapter()->get(sprintf('/businesses/%s', $id));
		return new BusinessEntity($response['business']);
	}

	public static function all(array $params = array())
	{
		throw new \Exception('Not yet implemented');
	}
}
