<?php
    require "db/db.php";
    unset($_SESSION['logged_user']);//выход из сессии
    header('location: http://localhost/myproject/index.php');//возвращение на главную страницу

    ?>