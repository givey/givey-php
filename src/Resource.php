<?php

namespace Givey;

use Givey\Adapter;

/**
 * Class Resource
 *
 * @package Givey
 */
abstract class Resource implements ResourceInterface
{
    /**
     * @var Adapter
     */
    private static $adapter;

    /**
     * @param Adapter $adapter
     */
    public static function setAdapter(Adapter $adapter = null)
    {
        self::$adapter = $adapter;
    }

    /**
     * @return Adapter
     * @throws \Exception
     */
    protected static function adapter()
    {
        if ( ! self::$adapter) {
            throw new \Exception('No adapter set');
        }

        return self::$adapter;
    }
}
