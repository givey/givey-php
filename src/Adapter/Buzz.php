<?php

namespace Givey\Adapter;

use Givey\Adapter;

class Buzz extends Adapter
{
    public function get($url, array $query = array())
    {
        $query['access_token'] = $this->token;
        $query_string = http_build_query($query);

        $browser = new \Buzz\Browser();
        $response = $browser->get(sprintf('%s%s?%s', $this->api, $url, $query_string));

        if ( ! $response->isSuccessful()) {
            throw new \Exception('Unsuccessful');
        }

        return json_decode($response->getContent(), true);
    }
}
