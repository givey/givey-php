<?php

use Givey\Resource;

abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{
	protected $adapter;

	public function setUp()
	{
		$this->adapter = Mockery::mock('\Givey\Adapter', array(uniqid()));
		Resource::setAdapter($this->adapter);
	}
}
