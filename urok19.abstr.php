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

$r=newRectangle();
$q=newQuadrate();

echo $r->getSquare(4,8);
echo $r->getPerimeter(4,8);

echo $q->getSquare(4,4);
echo $q->getPerimeter(4,4);



