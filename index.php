<?php

require __DIR__ . '/vendor/autoload.php';

use Grinderspro\Navigator\FileNavigator;
use Grinderspro\Navigator\Common\Type;

$navigator = new FileNavigator();
$navigator->setReader(Type::TXT);
$data = $navigator->getContent('/var/tmp/file.txt');

var_dump($data); //содержимое txt