<?php

namespace Givey;

abstract class Adapter
{
    /**
     * @var string
     */
    protected $api = 'https://api.givey.com/v3';

    /**
     * @var string
     */
    protected $token = null;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @param $url
     *
     * @return mixed
     */
    abstract public function get($url);
}
