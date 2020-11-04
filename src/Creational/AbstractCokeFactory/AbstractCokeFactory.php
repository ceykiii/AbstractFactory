<?php
namespace Acar\Pattern\Creational\AbstractCokeFactory;
abstract class AbstractCokeFactory{
    abstract function createNormalCoke();
    abstract function createFreeSugarCoke();
    abstract function createLightCoke();
    abstract function createLemeonCoke();
}