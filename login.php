<?php
require "db/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
</head>
<body>
    <div class="regform" mt-4 style ="width:500px">
        <h1>Форма регистрации</h1>
            <form action="php/check.php" metod = "POST">
                <input type="text" class = "form-control" name = "login" id = "login" placeholder = "Введите логин" value = "<?php echo @$data['login']; ?>"> <br> 
                <input type="email" class = "form-control" name = "email" id = "email" placeholder = "Введите e-mail" value = "<?php echo @$data['email']; ?>"> <br>
                <input type="password" class = "form-control" name = "password" id = "password" placeholder = "Введите пароль" value = "<?php echo @$data['password']; ?>"> <br>
                <button class = "btn btn-success" name = "do_signup" type="submit">Зарегистрироваться</button>

            </form>
    </div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</body>
</html>