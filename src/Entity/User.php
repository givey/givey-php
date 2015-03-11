<?php

namespace Givey\Entity;

use Givey\Entity;

class User extends Entity
{
    public $id;
    public $givey_tag;
    public $name;
    public $profile_url;
    public $email;
    public $avatar_url;
    public $hero_image_url;
    public $personal_message;
    public $currency;
    public $donated_amount;
    public $last_donation_at;
    public $created_at;
    public $updated_at;

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
