<?php

namespace Givey\Entity;

use Givey\Entity;
use Givey\User;

/**
 * Class Business
 *
 * @package Givey\Entity
 */
class Business extends Entity
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
     * @var integer
     */
    public $match_total;

    /**
     * @var integer
     */
    public $match_count;

    /**
     * @var integer
     */
    public $employee_count;

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

    /**
     * Return array of Employees
     *
     * @return array
     */
    public function employees()
    {
        return User::all(array(
          'business_id' => $this->id
        ));
    }
}
