<?php

namespace Grinderspro\Navigator\Factory;

/**
 * Reader Factory class
 *
 * @author <grinderspro@gmail.com>
 */

use Grinderspro\Navigator\Reader\TxtReader;
use Grinderspro\Navigator\Reader\BinReader;

class ReaderFactory
{
    const NAME_SPACE = 'Grinderspro\\Navigator\\Reader\\';

    public static function create($fileType)
    {
        $type = ucfirst($fileType);
        $class = self::NAME_SPACE . $type.'Reader';
        return new $class();
    }
}