<?php

namespace Entity;

class UserTest extends \AbstractTestCase
{
	private $undertest;

	public function setUp()
	{
		$this->undertest = new \Givey\Entity\User($this->provider_valid_data());
	}

	public function test_id()
	{
		$this->assertSame(123, $this->undertest->id);
	}

	public function test_givey_tag()
	{
		$this->assertSame('scott', $this->undertest->givey_tag);
	}

	public function test_last_donation_at()
	{
		$this->assertInstanceOf('DateTime', $this->undertest->last_donation_at);
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
			'id'               => 123,
			'givey_tag'        => 'scott',
			'name'             => 'Scott Robertson',
			'profile_url'      => 'https://www.givey.com/scott',
			'email'            => 'scott@user-email-proxy.givey.com',
			'avatar_url'       => 'https://res.cloudinary.com/givey/image/upload/v1382602986/zbuyena11zthsplhanty.jpg',
			'hero_image_url'   => null,
			'personal_message' => 'Pawz for Thought save a lot of lives, and change a lot of animals lives. It\'s nice to see people who genuinely care about animals.',
			'currency'         => 'GBP',
			'donated_amount'   => 100,
			'last_donation_at' => '2013-10-29T10:46:36.909Z',
			'created_at'       => '2013-10-24T08:23:05.355Z',
			'updated_at'       => '2015-03-11T19:37:14.787Z',
		);
	}
}
