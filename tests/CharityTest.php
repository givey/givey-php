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

    public function test_all_returns_array_of_entities()
    {
        $this->adapter->shouldReceive('get')->with('/charities', array('business_id' => 100))->once()->andReturn(array(
          'charities' => array(
            array(
              'id' => 100
            )
          )
        ));

        $charities = \Givey\Charity::all(array('business_id' => 100));
        $this->assertInternalType('array', $charities);
        $this->assertCount(1, $charities);
        $this->assertInstanceOf('\Givey\Entity\Charity', $charities[0]);
        $this->assertSame(100, $charities[0]->id);
    }
}
