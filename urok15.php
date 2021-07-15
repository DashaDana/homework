<?php


class animal
{
    public $name = 'Unknown';
    public $color = 'Unknown';
    public $age = '..';
    public $gender = 'Unknown';

}

$a = new animal();
$b = new animal();

$a->name='Bruno';
$a->color='gray with black stripes';
$a->gender='Man';
$a->age=2.5;

$b->name='Hvostik';
$b->color='white with black spots';
$b->age=1;
$b->gender='Man';

echo "<pre>";
var_dump($a, $b);
