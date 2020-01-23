<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $subject = "=?utf-8?B?".base64_encode("Сообщение с моего сайта")."?="; //шифрование заголовка отправляемого сообщения
    $headers = "From: $email\r\nReply-to: $email\r\nContent_type: text/html; charset=utf-8\r\n";//формат заголовка письма

    $success = mail(
        "leonart36@yandex.ru", //почта куда будет отправляться
        $subject, //тема письма
        $messege, // сообщение
        $_POSTheaders //заголовки
    );
    echo $success;
?>