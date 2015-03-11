<?php

class ResourceTest extends AbstractTestCase
{
    /**
     * @expectedException Exception
     * @expectedExceptionMessage No adapter set
     */
    public function test_no_adapter()
    {
        \Givey\Resource::setAdapter(null);
        \Givey\User::retrieve(100);
    }
}
