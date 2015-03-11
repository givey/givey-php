<?php

namespace Givey;

interface ResourceInterface
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public static function retrieve($id);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public static function all(array $params = array());
}
