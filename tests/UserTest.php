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

    /**
     * @expectedException Exception
     * @expectedExceptionMessage At least one filter is required
     */
    public function test_all_requires_filter()
    {
        \Givey\User::all();
    }

    public function test_all_returns_array_of_entities()
    {
        $this->adapter->shouldReceive('get')->with('/users', array('business_id' => 100))->once()->andReturn(array(
          'users' => array(
            array(
              'id' => 100
            )
          )
        ));

        $users = \Givey\User::all(array('business_id' => 100));
        $this->assertInternalType('array', $users);
        $this->assertCount(1, $users);
        $this->assertInstanceOf('\Givey\Entity\User', $users[0]);
        $this->assertSame(100, $users[0]->id);
    }
}
