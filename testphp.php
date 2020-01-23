<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/forvue.css">

    <title>Примеры на Vue.JS</title>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" data-value="home" href="index.php">Home</a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="myvue.html">Пример с Vue.JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="react.html">Пример с React.JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="shop.php">Пример магазина на PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="testphp.php">Пример на PHP</a>
                </li>
            </ul>

        </div>

    </nav>

<div class="container pt-5" id="app">
        <div class="row mb-5">
            <div class="col">
    Здесь представлен мой учебный пример с применением PHP и mySQL.
    Будет разработана БД со следующей схемое:
    <ul>
        <li> Таблица articles </li>
            <ol>
                <li>Уникальный идентификатор статьи, id</li>
                <li>Название статьи, title</li>
                <li>Текст статьи, text</li>
                <li>Категории статьи, categotie_id</li>
                <li>Дата публикации, pubdate</li>
                <li>Количество просмотров статьи, views</li>
            </ol>   
        <li> Таблица articles_categories </li> 
            <ol>
                <li>идентификатор статьи, id</li>
                <li>Название категории</li>
            </ol>  
        <li> Таблица comments </li> 
            <ol>
                <li>идентификатор статьи, id</li>
                <li>Автор комментария,author</li>
                <li>Текс комментария, text</li>
                <li>Дата публикации комментария, pubdate</li>
                <li>К какой статье опубликован комментарий, articles_id</li>
            </ol>  
    </ul>
</div>
</div>
</div>

    <?php
    $connection=mysqli_connect('127.0.0.1','root','','test');
    if($connection==false){
        echo 'Не удалось подключиться к БД! <br>';
        echo mysqli_connect_error();//выводит причину неподключения к БД
        exit();//завершаем скрипт
    }

    $result= mysqli_query($connection, "SELECT * FROM `ARTICLES_CATEGORIES`");
    //$r1=mysqli_fetch_assoc($result);//требуется для последовательного вывода значений
if( mysqli_num_rows($result)==0){//если категории будут не найдены выведет сообщение
    echo 'Категорий не найдено!';
} else

{?>
<p>Вывод списка категорий с количеством статей в категории:</p>
    <ul>
        <?php 
        while(($category = mysqli_fetch_assoc($result)))
        {
            $articles_count= mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categorie_id` = ". $category['id']);//определение количества статей
            $articles_count_result = mysqli_fetch_assoc($articles_count);
            echo '<li>' .$category[title] .' ('.  $articles_count_result['total_count'] .')<?li>';
        }
        ?>
    </ul>
<?php
}
?>
<p>Вывод текущей даты и времени:
<?php
echo date('d.m.Y  H:i:s');

?> Остальные параметры для вывода даты можно посмотреть  <a href="http://php.net/manual/ru/function.date.php">здесь</a> </p>

<p>Здесь выводится количество дней со дня моего рождения!:</p>

<?php
$start_date = '1983-10-10 20:45:00';
$start_date_timestamp = strtotime($start_date);

$diff = time() - $start_date_timestamp;
$days_passed = floor((($diff/60)/60)/24);

echo ' Между ' . date('d.m.Y H:i:s', $start_date_timestamp). ' и ' .date('d.m.Y H:i:s'). 
' прошло ' . $days_passed. ' дня!';
?>
    


     <footer>
        <!--LiveInternet counter-->
        <script type="text/javascript">
            document.write("<a href='//www.liveinternet.ru/click' " +
                "target=_blank><img src='//counter.yadro.ru/hit?t22.6;r" +
                escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                    ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                        screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                ";h" + escape(document.title.substring(0, 150)) + ";" + Math.random() +
                "' alt='' title='LiveInternet: показано число просмотров за 24" +
                " часа, посетителей за 24 часа и за сегодня' " +
                "border='0' width='88' height='31'><\/a>")
        </script>
        <!--/LiveInternet-->

        <span class="left">
      Все права защищены &copy; 2018
        </span>
        <span class="right"><a href="https://vk.com/volgochrome" target="_blank"><img src="image/vk.png"  alt="Группа в контакте" title="Группа в контакте"></a></span>
        <span class="right"> <img src="image/insta.png" alt="Группа в Instagram" title="Группа в Instagram"></span>
        <span class="right"><a href="https://www.youtube.com/channel/UCSsuliAb_a395kBXTKfbMAw?view_as=subscriber" target="_blank"> <img src="image/youtube.png" alt="Канал в YouTube" title="Канал в YouTube"></a></span></footer>


    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src='js/main.js'></script>
</body>
</html>