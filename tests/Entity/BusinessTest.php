<?php

namespace Entity;

class BusinessTest extends \AbstractTestCase
{
	private $undertest;

	public function setUp()
	{
		$this->undertest = new \Givey\Entity\Business($this->provider_valid_data());
	}

	public function test_id()
	{
		$this->assertSame(200, $this->undertest->id);
	}

	public function test_givey_tag()
	{
		$this->assertSame('giveybiz', $this->undertest->givey_tag);
	}

	public function test_created_at()
	{
		$this->assertInstanceOf('DateTime', $this->undertest->created_at);
	}

	public function test_updated_at()
	{
		$this->assertInstanceOf('DateTime', $this->undertest->updated_at);
	}

	public function test_match_total()
	{
		$this->assertSame(100000, $this->undertest->match_total);
	}

	public function test_match_count()
	{
		$this->assertSame(100, $this->undertest->match_count);
	}

	public function test_employee_count()
	{
		$this->assertSame(25, $this->undertest->employee_count);
	}

	protected function provider_valid_data()
	{
		return array(
			'id'               => 200,
			'givey_tag'        => 'giveybiz',
			'name'             => 'Givey',
			'profile_url'      => 'https://www.givey.com/giveybiz',
			'email'            => 'giveybiz@user-email-proxy.givey.com',
			'avatar_url'       => 'https://res.cloudinary.com/givey/image/upload/v1382602986/zbuyena11zthsplhanty.jpg',
			'hero_image_url'   => null,
			'match_total'      => 100000,
			'match_count'      => 100,
			'employee_count'   => 25,
			'created_at'       => '2013-10-24T08:23:05.355Z',
			'updated_at'       => '2015-03-11T19:37:14.787Z',
		);
	}
}
