<?php

session_start();

$data=[//здесь хранятся ключи, по которые совподают с атрибутом name в index.php
    'name'=>'',//в модальном окне
    'email'=>'',
    'product'=>'',
    'price'=>'',
];

if(!empty($_POST)){//если не пуст массив POST
    require_once 'db.php';//подключаем базу
    $data=load($data);//загружаем массив
    //debug($data);//распечатываем массив data
    $order_id=save('orders', $data);//сохраняем data d orders
    var_dump($order_id);//распечатываем order_id
}

function load($data){
    foreach($_POST as $k => $v){
        if(array_key_exists($k, $data)){
            $data[$k]=$v;
        }
    }
    return $data;
}

function save($table, $data){
    $tbl=R::dispense($table);// подключаемся к базе
    foreach($data as $k=>$v){
        $tbl->$k=$v;

    }
    return R::store($tbl);//сохранение в базе
}
//функция для формотирования полученных данных
function debug($data){
    echo '<pre>' . print_r($data, true) . '</pre>';
}
?>
<!--https://www.youtube.com/watch?v=Fmpp_2QdeME здесь продолжение урока. для дальнейшей настройки требуется выложить на хостинг-->