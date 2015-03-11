<?php

class CharityTest extends AbstractTestCase
{
    public function test_retrieve_returns_entity()
    {
        $this->adapter->shouldReceive('get')->andReturn(array('charity' => array()));

        $charity = \Givey\Charity::retrieve('Dogstrust');
        $this->assertInstanceOf('\Givey\Entity\Charity', $charity);
    }
}
