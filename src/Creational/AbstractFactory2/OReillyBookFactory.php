<?php
namespace Acar\Pattern\Creational\AbstractFactory2;
use Acar\Pattern\Creational\AbstractFactory2\AbstractBookFactory; 
class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";
    function makePHPBook() {
        return new OReillyPHPBook;
    }
    function makeMySQLBook() {
        return new OReillyMySQLBook;
    }
}
