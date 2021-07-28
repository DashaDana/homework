<?php

class User {
    protected $name='unk';

    protected $age='unk';

    public function setName ($arg)
    {
        $this->name=$arg;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function setAge ($arg)
    {
        $this -> age = $arg;
    }

    public function getAge ()
    {
        return $this -> age;
    }
}

class Builder {

    public static function a ($name,$age){
        echo $name . ', ' .$age;

    }

public static function number($a,$b)
{
    static  $x=0;

    return $x++;
}



}
$user1=new Builder();
$user1->a('Sonya',22);

echo "<pre">
$user1->number('Sonya',22);
$user1->number('Sonya',22);
$user1->number('Sonya',22);
$user1->number('Sonya',22);

//var_dump ($user1::number('Sonya',22));
var_dump (Builder::number('Sonya',22));




