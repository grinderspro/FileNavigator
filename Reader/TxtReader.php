<?php

namespace Grinderspro\Navigator\Reader;

/**
 * TxtReader class
 *
 * @author <grinderspro@gmail.com>
 */

class TxtReader implements IReader
{
    /**
     * Read from txt file
     *
     * @param $filePath
     * @return string
     */
    public function read($filePath)
    {
        // условно читаем и отдаем содержимое текстового файла
        return 'содержимое txt';
    }
}