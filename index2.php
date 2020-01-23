<?php
    require "db/db.php";
    require "config.php";
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

    
    <title>Главная страница</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" data-value="home" href="#home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">

                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#about">Обо мне</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="#portfolio">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="webtech" href="#webtech">Web-технологии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="blog" href="#blog">Посты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="contacts" href="#contacts">Контакты</a>
                </li>
                
                
                <form method="POST" action="handle.php">
<input type="text" name="login" placeholder="Ваш логин" id="">
<input type="text" name="password" placeholder="Ваш паороль" id="">
<input type="submit" value="Отправить">

                </form>
                
            </ul>

        </div>
    </nav>
    <header class="header" id="home">
        <div class="overlay"> </div>
        <div class="container">
            <div class="description ">
                <h3>Здравствуйте! Добро пожаловать на мой сайт!</h3>
                <p>
                    Это мой учебный сайт. И он будет служить мне тренеровочной базой и моим портфолио. На нем я буду выкладывать свои нароботки по сайтостроению и моим увлечениям</p>

                </font>
                </h3>
            </div>
        </div>
    </header>

    <div class="row about" id="about">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <img align="center" src="image/my.jpg" class="img-fluid rounded">
            <span class="text-justify">J.Web Developer</span>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 desc">

            <h3>Кошелев Артем</h3>
            <p>
                35 лет. Интересуюсь и изучаю Web-технологии. Данная страница написана на bootstrap с применением JQuery и конечно CSS. Но постепенно буду добавлять различные изученные технологии. На данный момент изучал Vue.JS, React и БД с использованием MongoDB. Так
                же знаком с языком программирования Java и основами ООП. В портфолио и в моем блоге я решил представить свои работы и увлечения. Раньше я занимался аквапринтом и иногда учавствую в массовках на съемках.
            </p>
        </div>
    </div>
    <!-- portfolio -->
    <div class="portfolio" id="portfolio">
        <h2 class="text-center">Portfolio</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/1.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/2.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/3.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/4.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/5.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/6.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/7.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/8.jpg" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img align="center" src="image/portfolio/9.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Posts section -->
    <div class="blog" id="blog">
        <div class="container">
            <h2 class="text-center">Мой блог</h2>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img align="center" src="image/posts/cheln/1.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Челночницы 2</h4>
                            <p class="card-text">

                                Принял участие в съемках сериала Челночницы 2 в 5й серии
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="articles/movies/chelnochnici2.html" class="card-link">Смотреть дальше</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img align="center" src="image/posts/fit/1.jpg" class="img-fluid">
                        </div>

                        <div class="card-body" id="posts">
                            <h4 class="card-title">Королева фитнесса</h4>
                            <p class="card-text">

                                Принял участие в съемках сериала Королева фитнесса
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Смотреть дальше</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img align="center" src="image/posts//strel/1.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Стрельцов</h4>
                            <p class="card-text">

                                Принял участие в съемках фильма "Стрельцов"
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="card-link">Смотреть дальше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team section -->
    <div class="webtech" id="webtech">
        <div class="container">
            <h2 class="text-center">Примеры изученных технологий</h2>
            <div class="row">
                <a href="myvue.html">
                    <div class="col-lg-3 col-md-3 col-sm-12 item">


                        <img align="center" src="image/webtech/1.png" class="img-fluid" alt="team">
                        <div class="des">
                            Vue.JS
                        </div>
                </a>
                </div>
                <a href="react.html">
                    <div class="col-lg-3 col-md-3 col-sm-12 item">
                        <img align="center" src="image/webtech/2.png" class="img-fluid" alt="team">
                        <div class="des">
                            React.JS
                        </div>
                </a>
                </div>

                 <a href="testphp.php">
                    <div class="col-lg-3 col-md-3 col-sm-12 item">
                        <img align="center" src="image/webtech/2.png" class="img-fluid" alt="team">
                        <div class="des">
                            PHP&MySQL
                        </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form -->
    <div class="contact-form" id="contacts">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h2>В будущем сможете мне написать</h2>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg">
             
            </textarea>
                        </div>
                        <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                    </div>
                </div>
            </form>
        </div>
    </div>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    
</body>

</html>