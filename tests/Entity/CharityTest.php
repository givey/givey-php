<?php

namespace Entity;

class CharityTest extends \AbstractTestCase
{
    private $undertest;

    public function setUp()
    {
        $this->undertest = new \Givey\Entity\Charity($this->provider_valid_data());
    }

    public function test_id()
    {
        $this->assertSame(100, $this->undertest->id);
    }

    public function test_givey_tag()
    {
        $this->assertSame('dogstrust', $this->undertest->givey_tag);
    }

    public function test_created_at()
    {
        $this->assertInstanceOf('DateTime', $this->undertest->created_at);
    }

    public function test_updated_at()
    {
        $this->assertInstanceOf('DateTime', $this->undertest->updated_at);
    }

    protected function provider_valid_data()
    {
        return array(
          'id'             => 100,
          'givey_tag'      => 'dogstrust',
          'name'           => 'Dogs Trust',
          'profile_url'    => 'https://www.givey.com/dogstrust',
          'email'          => 'dogstrust@user-email-proxy.givey.com',
          'avatar_url'     => 'https://res.cloudinary.com/givey/image/upload/v1382602986/zbuyena11zthsplhanty.jpg',
          'hero_image_url' => null,
          'website_url'    => 'https://www.dogstrust.org.uk/',
          'twitter_url'    => 'https://twitter.com/DogsTrust',
          'facebook_url'   => 'https://www.facebook.com/DogsTrust',
          'created_at'     => '2013-10-24T08:23:05.355Z',
          'updated_at'     => '2015-03-11T19:37:14.787Z',
        );
    }
}
