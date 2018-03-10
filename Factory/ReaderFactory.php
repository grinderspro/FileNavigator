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
    public static function create($fileType)
    {
        $nameSpace = 'Grinderspro\\Navigator\\Reader\\';
        $type = ucfirst($fileType);
        $class = $nameSpace . $type.'Reader';
        return new $class();
    }
}