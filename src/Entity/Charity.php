<?php

namespace Givey\Entity;

use Givey\Entity;

/**
 * Class Charity
 *
 * @package Givey\Entity
 */
class Charity extends Entity
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $givey_tag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $profile_url;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $avatar_url;

    /**
     * @var string
     */
    public $hero_image_url;

    /**
     * @var string
     */
    public $website_url;

    /**
     * @var string
     */
    public $twitter_url;

    /**
     * @var string
     */
    public $facebook_url;

    /**
     * @var \DateTime
     */
    public $created_at;

    /**
     * @var \DateTime
     */
    public $updated_at;

    /**
     * @param array $parameters
     */
    protected function buildParameters(array $parameters = array())
    {
        foreach ($parameters as $parameter => $value) {
            switch ($parameter) {
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
