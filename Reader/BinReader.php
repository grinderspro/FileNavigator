<?php

namespace Grinderspro\Navigator\Reader;

/**
 * BinReader class
 *
 * @author <grinderspro@gmail.com>
 */

class BinReader implements IReader
{
    /**
     * Read from bin file
     *
     * @param $filePath
     * @return string
     */
    public function read($filePath)
    {
        // условно читаем бинарник
        return 'содержимое bin';
    }
}