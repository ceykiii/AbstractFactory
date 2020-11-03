<?php
use Acar\Pattern\Creational\AbstractFactory\CsvWriter;
use Acar\Pattern\Creational\AbstractFactory\JsonWriter;
use Acar\Pattern\Creational\AbstractFactory\UnixWriterFactory;
use Acar\Pattern\Creational\AbstractFactory\WinWriterFactory;
use Acar\Pattern\Creational\AbstractFactory\WriterFactory;
use Acar\Pattern\Test;
require_once(__DIR__ . '/vendor/autoload.php');  
$unixCreator = new UnixWriterFactory();
$unix = $unixCreator->createJsonWriter()->write(['merhaba' => "asdf"],1);
$winCreator = new WinWriterFactory();
print_r($unix);
