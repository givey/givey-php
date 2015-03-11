<?php

class BusinessTest extends AbstractTestCase
{
    public function test_retrieve_returns_entity()
    {
        $this->adapter->shouldReceive('get')->with('/businesses/giveyltd')->once()->andReturn(array(
          'business' => array(
            'id' => 100
          )
        ));

        $business = \Givey\Business::retrieve('giveyltd');
        $this->assertInstanceOf('\Givey\Entity\Business', $business);
        $this->assertSame(100, $business->id);
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessage Not yet implemented
     */
    public function test_all_not_implemented()
    {
        Givey\Business::all();
    }

    public function test_employees_returns_array_of_users()
    {
        $this->adapter->shouldReceive('get')->with('/businesses/giveyltd')->once()->andReturn(array(
          'business' => array(
            'id' => 100
          )
        ));

        $business = \Givey\Business::retrieve('giveyltd');
        $this->assertInstanceOf('\Givey\Entity\Business', $business);

        $this->adapter->shouldReceive('get')
                      ->with('/users', array('business_id' => $business->id))
                      ->once()
                      ->andReturn(array(
                        'users' => array(
                          array(
                            'id' => 100
                          )
                        )
                      ));

        $users = $business->employees();
        $this->assertInternalType('array', $users);
        $this->assertCount(1, $users);
        $this->assertInstanceOf('\Givey\Entity\User', $users[0]);
        $this->assertSame(100, $users[0]->id);
    }
}
