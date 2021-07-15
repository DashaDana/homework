<?php


class animal
{
    public $name = 'Unknown';
    public $firstname = 'Unknown';
    public $age = '..';
    public $gender = 'Unknown';

}

$a = new animal();
$b = new animal();

$a->name='Bruno';
$a->firstname='Kalzer';
$a->gender='Man';
$a->age=2.5;

$b->name='Hvostik';
$b->firstname='Pushochkin';
$b->age=1;
$b->gender='Man';

echo "<pre>";
var_dump($a, $b);
