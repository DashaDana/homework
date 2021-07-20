<?php

class User {
    protected $name;

    protected $age;

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

class Work extends User{

    private $salary;

    public function setSalary ($arg)
    {
        $this -> salary = $arg;
    }

    public function getSalary ()
    {
        return $this -> salary;
    }
}

$Ivan=new Work();
$Ivan->setName('Ivan');
$Ivan->getName();
$Ivan->setAge(25);
$Ivan->getAge();
$Ivan->setSalary(1000);
$Ivan->getSalary();
echo 'Name: ' . $Ivan->getName() . ',age: ' . $Ivan->getAge() . ',salary: ' . $Ivan->getSalary();

$Vasya=new Work();
$Vasya->setName('Vasya');
$Vasya->getName();
$Vasya->setAge(26);
$Vasya->getAge();
$Vasya->setSalary(2000);
$Vasya->getSalary();
echo  "<br> Name: " . $Vasya->getName() . ',age: ' . $Vasya->getAge() . ',salary: ' . $Vasya->getSalary();

$a=$Vasya->getSalary()+$Ivan->getSalary();
echo "<br> Summa Salary: " . $a;

echo "<pre>";
var_dump($Ivan,$Vasya);

class Student extends User{

    private $stipendia;

    private $kurs;

    public function setStipendia ($arg)
    {
        $this -> stipendia = $arg;
    }

    public function getStipendia ()
    {
        return $this ->stipendia;
    }

    public function setKurs ($arg)
    {
        $this -> kurs = $arg;
    }

    public function getKurs ()
    {
        return $this -> kurs;
    }
}

class Driver extends Work{

    private $voditelskiystagh;

    private $kategoriyaABC;

    public function setVoditelsprava ($arg)
    {
        $this -> voditelskiystagh = $arg;
    }

    public function getVoditelsprava ()
    {
        return $this -> voditelskiystagh;
    }

    public function setKategoriya ($arg)
    {
        $this -> kategoriyaABC = $arg;
    }

    public function getKategoriya ()
    {
        return $this -> kategoriyaABC;
    }

}