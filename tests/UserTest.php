<?php

class UserTest extends AbstractTestCase
{
	public function test_retrieve_returns_entity()
	{
		$this->adapter->shouldReceive('get')->andReturn(array('user' => array()));

		$user = \Givey\User::retrieve('scott');
		$this->assertInstanceOf('\Givey\Entity\User', $user);
	}
}
