<?php

// $_GET
// $_POST
// $_FILES

echo '<pre>';

//var_dump($_POST);

//if ($_FILES['photo']['size'] > 1000) {
//    echo 'Ой простите слишком большой файл';
//} else {
//    move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/' . $_FILES['photo']['name']);
//}


//if ($_FILES['photo']['type'] == 'image/png') {
//    move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/' . $_FILES['photo']['name']);
//}

//echo "\n<br />";
//
//switch ($_FILES['photo']['type']) {
//    case 'image/png':
//        echo 'вы загрузили картинку';
//    break;
//
//    case 'image/jpg':
//        echo 'вы загрузили картинку (jpg)';
//    break;
//
//    case 'text/css':
//        echo 'вы загрузили css файл стилей';
//    break;
//}

echo "\n<br />";
var_dump($_FILES);
