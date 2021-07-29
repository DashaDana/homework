<?php


class Animal
{

    protected $name;

    protected $age;

    protected $color;

    public function __construct(
        $name = 'Unknown',
        $age = 0,
        $color = 'Unknown'
    )
    {
        echo 'Privet is __construct! Name: ' . $name . ', Age: ' . $age . ',Color:' . $color .". \n";

        $this->name = $name;
        $this->age = $age;
        $this->color=$color;

        $this->setName($name);
        $this->setAge($age);
        $this->setColor($color);
    }

    public function __destruct()
    {
        echo 'Привет, я деструктор' . "\n";
    }

    public function __toString()
    {
        return $this->name . ', ' . $this->age . ',' . $this->color . "\n";
    }

    public function setName($v)
    {
        $this->name = $v;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($v)
    {
        $this->age = $v;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setColor($v)
    {
        $this->color = $v;
    }

    public function getColor()
    {
        return $this->color;
    }
}

echo "<pre>";

$a = new Animal('Pushok', 5 , 'Brown');

echo 'To string! Мое имя — ' . $a . "\n";
echo 'Name — ' . $a->getName() . ',Age -' . $a->getAge() . ',Color-' . $a->getColor() . "\n";

