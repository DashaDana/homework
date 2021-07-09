<?php

$users = [
    ['name' => 'Alex', 'age' => 18],
    ['name' => 'Mike', 'age' => 12],
    ['name' => 'Oleg', 'age' => 11],
    ['name' => 'Paul', 'age' => 20],
    ['name' => 'Smith', 'age' => 38],
];

//функция которая определяет кол-во элементов в массиве
function arrayCount($v) {
    $i=0;
    foreach ($v as $value) {
        $i++;
    }
    return $i;
}

$n = arrayCount($users);

echo '<b> Всего пользователей: </b>' . '<i>' . $n . '</i>' . '<br/>';
$max=$users [0]['age'];
for ($i=0;$i<$n;$i++){

    if($users [$i]['age']>$max){
        $max=$users [$i]['age'];
    }
}

echo '<b> Возраст самого взрослого: </b> ' . '<i>' . $max . '</i>';

