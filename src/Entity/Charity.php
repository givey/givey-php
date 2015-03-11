<?php

namespace Givey\Entity;

use Givey\Entity;

class Charity extends Entity
{
	public $id;
	public $givey_tag;
	public $name;
	public $profile_url;
	public $description;
	public $avatar_url;
	public $hero_image_url;
	public $website_url;
	public $twitter_url;
	public $facebook_url;
	public $created_at;
	public $updated_at;

	protected function buildParameters(array $parameters = array())
	{
		foreach ($parameters as $parameter => $value)
		{
			switch($parameter)
			{
				case 'updated_at':
					$this->created_at = new \DateTime($value);
					break;
				case 'created_at':
					$this->updated_at = new \DateTime($value);
					break;
				default:
					$this->{$parameter} = $value;
			}
		}
	}
}
