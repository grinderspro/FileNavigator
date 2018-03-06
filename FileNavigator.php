<?php

namespace Grinderspro\Navigator;

use Grinderspro\Navigator\Reader\IReader;
use Grinderspro\Navigator\Factory\ReaderFactory;

/**
 * Navigator class
 *
 * @author <grinderspro@gmail.com>
 * @updated: 06.03.17
 */

class FileNavigator
{
    /**
     * @var IReader
     */
    private $reader;
    private $writer;

    /**
     * Set reader type
     *
     * @param string $type
     */
    public function setReader($type)
    {
        $this->reader = ReaderFactory::create($type);
    }

    /**
     * @param string $fileName
     */
    public function getContent($fileName)
    {
        return $this->reader->read($fileName);
    }

    public function delFile($fileName)
    {
    }

    public function moveFile($from, $to)
    {
    }

    public function infoFile()
    {
    }
}