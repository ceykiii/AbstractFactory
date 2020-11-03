<?php
namespace Acar\Pattern\Creational\AbstractFactory;

interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}