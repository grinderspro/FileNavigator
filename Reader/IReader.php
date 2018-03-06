<?php

namespace Grinderspro\Navigator\Reader;

/**
 * IReader interface
 *
 * Определяем интерфейс ридера
 *
 * @author <grinderspro@gmail.com>
 */

interface IReader
{
    public function read($filePath);
}