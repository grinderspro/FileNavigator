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
        switch ($fileType) {
            case 'txt':
                $reader = new TxtReader();
                break;
            case 'bin':
                $reader = new BinReader();
                break;
        }

        return $reader;
    }
}