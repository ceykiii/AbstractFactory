<?php
use Acar\Pattern\Creational\AbstractFactory\CsvWriter;
use Acar\Pattern\Creational\AbstractFactory\JsonWriter;
use Acar\Pattern\Creational\AbstractFactory\UnixWriterFactory;
use Acar\Pattern\Creational\AbstractFactory\WinWriterFactory;
use Acar\Pattern\Creational\AbstractFactory\WriterFactory;

use Acar\Pattern\Creational\AbstractFactory2\OReillyBookFactory;
use Acar\Pattern\Creational\AbstractFactory2\SamsBookFactory;
 


require_once(__DIR__ . '/vendor/autoload.php');
/*
$unixCreator = new UnixWriterFactory();
$unix = $unixCreator->createJsonWriter()->write(['merhaba' => "asdf"],1);
$winCreator = new WinWriterFactory();
print_r($unix);*/
$getOreillyBook = new OReillyBookFactory();
$samsBookFactory = new SamsBookFactory();
$phpBook = $getOreillyBook->makePHPBook()->getAuthor();
$mysqlBook = $getOreillyBook->makeMySQLBook()->getAuthor();

$samsPhpBook = $samsBookFactory->makePHPBook()->getAuthor();
echo $samsPhpBook;

 
