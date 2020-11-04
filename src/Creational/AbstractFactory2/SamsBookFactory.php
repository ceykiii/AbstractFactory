<?php
namespace Acar\Pattern\Creational\AbstractFactory2;
use Acar\Pattern\Creational\AbstractFactory2\AbstractBookFactory; 
class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";
    function makePHPBook() {
        return new SamsPHPBook;
    }
    function makeMySQLBook() {
        return new SamsMySQLBook;
    }
}
