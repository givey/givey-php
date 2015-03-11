<?php

namespace Givey\Entity;

use Givey\Entity;

/**
 * Class User
 *
 * @package Givey\Entity
 */
class User extends Entity
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
    public $email;

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
    public $personal_message;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var integer
     */
    public $donated_amount;

    /**
     * @var \DateTime
     */
    public $last_donation_at;

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
                case 'last_donation_at':
                    $this->last_donation_at = new \DateTime($value);
                    break;
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
