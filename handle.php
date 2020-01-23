<?php

$login = $_POST['login'];
$password = $_POST['password'];
$count = mysqli_query($connection, "SELECT * FROM `user`
 WHERE `login` = '$login' AND `password` = '$password'");
 if (mysqli_num_rows($count)==0){
     echo 'Вы не зарегестрированы';
    }else{
        echo 'Привет, ' .$login . '!';
    }echo "Ваш логин" .$_POST['login'];


?>