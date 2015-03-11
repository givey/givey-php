<?php

namespace Givey\Adapter;

use Givey\Adapter;

class Buzz extends Adapter
{
    public function get($url)
    {
        $browser = new \Buzz\Browser();
        $response = $browser->get(sprintf('%s%s?access_token=%s', $this->api, $url, $this->token));

        if ( ! $response->isSuccessful()) {
            throw new \Exception('Unsuccessful');
        }

        return json_decode($response->getContent(), true);
    }
}
