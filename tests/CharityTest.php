<?php

class CharityTest extends AbstractTestCase
{
    public function test_retrieve_returns_entity()
    {
        $this->adapter->shouldReceive('get')->with('/charities/Dogstrust')->once()->andReturn(array(
          'charity' => array(
            'id' => 100
          )
        ));

        $charity = \Givey\Charity::retrieve('Dogstrust');
        $this->assertInstanceOf('\Givey\Entity\Charity', $charity);
        $this->assertSame(100, $charity->id);
    }
}
