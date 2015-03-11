<?php

namespace Givey;

use Givey\Adapter;

abstract class Resource implements ResourceInterface
{
    /**
     * @var Adapter
     */
    private static $adapter;

    /**
     * @param Adapter $adapter
     */
    public static function setAdapter(Adapter $adapter)
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
