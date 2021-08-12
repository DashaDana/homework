<?php


abstract class Figure{

    abstract public function getSquare($a,$b);

    abstract public function getPerimeter($a,$b);
}

//прямоугоьник
class Rectangle extends Figure {

public function getSquare($a,$b)
{
  $square= $a*$b;
  return $square;
}

public function getPerimeter($a,$b)
{
   $perimeter= 2*($a+$b);
   return $perimeter;
}

}
    //квадрат
class Quadrate extends Figure {

    public function getSquare($a,$b)
    {
        $square= $a*$a;
        return $square;
    }

    public function getPerimeter($a,$b)
    {
        $perimeter= 4*$a;
        return $perimeter;
    }
}

$r=new Rectangle();
$q=new Quadrate();


echo $r->getSquare(4,8);
echo "<pre>";
echo $r->getPerimeter(4,8);
echo "<pre>";
echo $q->getSquare(5,5);
echo "<pre>";
echo $q->getPerimeter(5,5);



