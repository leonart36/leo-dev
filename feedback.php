<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="feedback">
    <h1>Обратная связь</h1>
    <form id="mailForm">
        <input type="email" id="email" name="email" placeholder="Введите Ваш e-mail"><br>
        <input type="text" id = "name" name="name" placeholder="Введите имя, как я могу к Вам обращаться"><br>
        <input type="phone" id = "phone" name="phone" placeholder="При желании введите телефон"><br>
        <textarea name="message" id="message" placeholder="Введите Ваше сообщение" class="form-control"></textarea><br>
        <button type="button" id = "sendMail" class = "btn btn-success">Отправить</button>

    </form>
    <div id="errorMessage"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/feedback.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</body>
</html>