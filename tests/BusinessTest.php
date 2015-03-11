<?php

class BusinessTest extends AbstractTestCase
{
    public function test_retrieve_returns_entity()
    {
        $this->adapter->shouldReceive('get')->andReturn(array('business' => array()));

        $business = \Givey\Business::retrieve('giveyltd');
        $this->assertInstanceOf('\Givey\Entity\Business', $business);
    }
}
