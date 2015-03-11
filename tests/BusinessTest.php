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
}
