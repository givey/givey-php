<?php

class UserTest extends AbstractTestCase
{
    public function test_retrieve_returns_entity()
    {
        $this->adapter->shouldReceive('get')->with('/users/scott')->once()->andReturn(array(
          'user' => array(
            'id' => 100
          )
        ));

        $user = \Givey\User::retrieve('scott');
        $this->assertInstanceOf('\Givey\Entity\User', $user);
        $this->assertSame(100, $user->id);
    }
}
