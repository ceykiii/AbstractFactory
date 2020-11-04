<?php
namespace Acar\Pattern\Creational\AbstractFactory2;
abstract class AbstractBookFactory {
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}