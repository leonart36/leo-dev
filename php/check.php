<?php

    require "../db/db.php";

    
   // $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);//filter_var отфильтровывает значения, которые не надо добавлять в БД и различные html символы
   // $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    //$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $data = $_POST;
   if(isset($data['do_signup']))
    {
        $errors = array();
        if($data['login'] == '')
        {
        $errors[] = 'Введите логин!';
        }
        if($data['email'] == '')
        {
        $errors[] = 'Введите e-mail!';
        }
        if($data['password'] == '')
        {
        $errors[] = 'Введите пароль!';
        }
        if(empty($errors))
        {

        }else{
            echo '<div style = "color: red;">'.array_shift($errors).'</div><hr>';
        }
    }

    /*if(mb_strlen($login) < 5 || mb_strlen($login) > 20){
    echo "Недопустимая длина логина<br>";
    echo "Логин должен состоять от 5 до 20 символов";
    echo $login;
    exit();
    }
   else if(mb_strlen($email) < 5 || mb_strlen($email) > 30){
   echo "Недопустимая длина e-mail<br>";
    exit();
   }
    else 
        if(mb_strlen($password) < 6 || mb_strlen($password) > 20){
            echo "Недопустимая длина пароля";
            exit();
        }*/
    //$mysql = new mysqli('localhost', 'root', '', 'register');

    /*$query = "INSERT INTO users (login, email, passwor`) VALUES ('login','email','password')";
                    $result = mysqli_query($mysql, $query); //передаем результат в нашу БД
                    //создание аллертов
                    
                    
                    if($result){
                        $smsg = "Регистрация прошла успешно";
                    }else {
                            $fsmsg = "Ошибка";
                        }
    /*$mysql->query("INSERT INTO users (login, email, password) VALUES('$login', '$email', '$password')");
    //после добавления мы должны закрыть запрос с БД
    $mysql->close();*/
?>