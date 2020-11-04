<?php
namespace Acar\Pattern\Creational\AbstractFactory2;
use Acar\Pattern\Creational\AbstractFactory2\AbstractBook;
abstract class AbstractMySQLBook extends AbstractBook {
    protected $subject = "MySQL";
}