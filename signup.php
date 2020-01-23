<?php
    require "db/db.php";
    $data=$_POST;
    if(isset($data['do_singup']))
    {
        $errors=array();
        if(trim($data['login'])==' ')
        {
            $errors[]='Введите логин!';
        }
        
        if(trim($data['email'])=='')
        {
            $errors[]='Введите E-mail!';
        }
        if(trim($data['password'])=='')
        {
            $errors[]='Введите пароль!';
        }
        if(trim($data['password_2'])!=$data['password'])
        {
            $errors[]='Пароли не совпадают!';
        }
        //проверка на совпадение логина и email
        if(R::count('user',"login=?", array($data['login']))>0){
            $errors[]='Пользователь с таким логином существует!';
        }
        if(R::count('user',"email=?", array($data['email']))>0){
            $errors[]='Пользователь с таким Email существует!';
        }

        //если все поля заполнены-регестрируем, если нет-выводим ошибку
        if(empty($errors)){
        //все хорошо-регестрируем
        $user=R::dispense('user');
        $user->login=$data['login'];
        $user->email=$data['email'];
        $user->password=password_hash($data['password'],PASSWORD_DEFAULT);
        R::store($user); //сохранение пользователя
        echo '<div style="color: green;">Вы успешно зарегестирорваны!</div><hr>';
        }else{
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="http://localhost/myproject/signup.php" method="POST">
<p>
    <p><strong>Ваш логин:</strong></p>
    <input type="text" name="login" id="" value="<?php echo @$data['login']; ?>">
</p>
<p>
    <p><strong>Ваш e-mail:</strong></p>
    <input type="email" name="email" id="" value="<?php echo @$data['email']; ?>">
</p>
<p>
    <p><strong>Ваш пароль:</strong></p>
    <input type="password" name="password" id="" value="<?php echo @$data['password']; ?>">
</p>
<p>
    <p><strong>Повторите Ваш пароль:</strong></p>
    <input type="password" name="password_2" id="" value="<?php echo @$data['password_2']; ?>">
</p>
<p>
    <button type="submit" name="do_singup">Зарегестрироваться</button>
</p>

<a href="http://localhost/myproject/index.php">На главную</a>
</form>
</body>
</html>