<?php
class ArrIt extends ArrayIterator {}

$ao = new ArrayObject();
$ao->offsetSet(1, 'Test1');
$i1 = $ao->getIterator();
print_r($i1);

$ao->offsetSet(2, 'Test2');
$i2 = $ao->getIterator();
print_r($i2);

$ao->setIteratorClass('ArrIt');
$i3 = $ao->getIterator();
print_r($i3);

