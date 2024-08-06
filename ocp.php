<?php

/*
1. Применение принципа открытости-закрытости:
Имеются два класса: SomeObject, представляющий объект, и SomeObjectsHandler, реализующий обработку этих объектов.
Текущая реализация SomeObjectsHandler не соответствует Open-Closed Principle (OCP) из принципов SOLID. Необходимо
модифицировать SomeObjectsHandler, чтобы он соответствовал принципу OCP.

class SomeObject {
    protected $name;
    public function __construct(string $name) { }
    public function getObjectName() { }
}
class SomeObjectsHandler {
    public function __construct() { }
    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
            if ($object->getObjectName() == 'object_1')
                $handlers[] = 'handle_object_1';
            if ($object->getObjectName() == 'object_2')
                $handlers[] = 'handle_object_2';
        }
        return $handlers;
    }
}
$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];
$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);
*/

class SomeObject
{
    protected $name;

    public function __construct(string $name)
    {
    }

    public function getObjectName()
    {
    }
}

class SomeObjectsHandler
{

    public function __construct()
    {
    }

    public function handleObjects(array $objects): array
    {
        return array_map(function ($object) {
            return "handle_{$object->getObjectName()}";
        }, $objects);
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);
