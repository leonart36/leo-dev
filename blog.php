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

    <link rel="stylesheet" href="css/main.css">

    <title><?php echo $config['title']; ?></title>
</head>

<body>

<!--<nav class="navbar navbar-expand-lg fixed-top ">
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

</nav>-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
<a href="#" class="navbar-brand">
        <img src="image//logo.png" alt="logo" width="50" height="50">
    </a>
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a href="#" class="nav-link">Съемки</a>
        </li>
        <li class="nav-item active">
            <a href="#" class="nav-link">Статьи</a>
        </li>
        <li class="nav-item active">
            <a href="#" class="nav-link">Разное</a>
        </li>
        <li class="nav-item active">
            <a href="#" class="nav-link">Обо мне</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input type="text" class="form-control mr-sm-2" placeholder="Search" 
        area-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </form>    
    </ul>
  </div>  
</nav>


 <div class="container" id="">
        <div class="row" id="about_site">
            <div  id="">
                <details>
                    <summary>
                <h1>Про мой блог</h1>
                <p>Всем привет! Добро пожаловать на мой сайтик! Чувствуйте себя как дома! Хочу создать что-то типа блога,
                     в котором я буду рассказывать 
                    про мои участия в съемках фильмов, сериалах, роликах и разные другие вещи.  
                </p>
                <p>В будущем планирую сделать сервис, где любой желающий сможет рассказать свои истории про съемки и не только. А историй на съемках, поверьте, не мало! Вы и сейчас можете мне присылать на почту свои истории, а я их буду выкладывать. Только, чтобы было все корректно-цензурно и не нарушало права. 
 Так же не откажусь от всяческой помощи, помощи в наполнении сайта, подсказках, администрировании, продвижении и поддержке как моральной, так и финансовой)). Особенно хотелось бы помощи от специалистов как и киноиндустрии,                   так и подсказок как лучше преподносить информацию, т.к. много юридических подводных камней. 
 Сейчас у меня есть, пока что, постоянная работа. По выходным я стараюсь помататься по съемкам (хотя сейчас зима и со съемками глуховато), сайт я создаю не с помощью конструктора сайтов, а стараюсь освоить Web-разработку и Web-технологии и на все уходит не мало времени. А занимаюсь я этим потому, что охота устроиться на стабильную, перспективную работу, да к тому же сайт, созданный самостоятельно, вроде как, продвигается легче. И из-за всего этого времени мало на что хватает. </p>
</summary>
 <p>А почему ты не хочешь стать актером?- спросите Вы меня... Потому что это не каждому дано и не каждому везет появиться в нужное время и в нужном месте</p>
 <p>И так начнем! С недавних пор я открыл для себя участие в массовках. И тут как говорится: Понеслось!!!</p>
 <p>Про массовки я услышал пару лет назад. И даже как услышал... Я услышал, что моя знакомая бегала по передачам в качестве зрителей и что им за это платили деньги. Я раньше думал, что эти зрители просто, типа, любителей этих передач и что они может даже платили деньги, чтобы туда попасть как на обычные концерты, спектакли. А тут услышал, что оказывается им платят деньги за это.
 И как-то раз мне друган присылает сообщение: А ты не смотрел "Ледокол"? Смотрел- говорю я. А видел нашего земляка в одном кадре? И посмотрел я эту сцену и реально там был наш земляк. И тут я начал гадать как же это он смог попасть в          фильм.</p>
<p>И вот я перебрался в Москву и узнав, с очередного места работы о сокращении я начал искать работу и подработку. И тут я на авито наткнулся на объявление об участии в массовках. (Об этом я напишу отдельную статью, т.к. я наткнулся на мошенников и охота, что бы меньше людей на них натыкалось, потому что я был не один такой). И дальше я начал искать способы попасть на массовки. 
И первый раз я попал на передачу "Мужское и женское" на Первом канале. Данный вид мероприятий называю хлопушками. Когда ты сидишь в зале и по команде начинаешь хлопать либо мычать, изображая возмущение и различные эмоции. Не для всех, конечно, это интересное мероприятие, но, если честно мне понравилось слушать Гордона, но больше я не хочу там появляться. Затем попал на ГлавКино на съемку передачи «Однажды в России». И это было что-то с чем-то! Я не знал, что можно устать ржать… Но в этом, наверное, и минус, того что там очень весело, ну по крайней мере в первый раз. А многие на все эти передачи и массовки ходят постоянно. Многие даже живут за счет этого. Походив три месяца по съемкам, я почти каждый раз встречал знакомых. И после таких походов я чаще стал смотреть российские фильмы, рекламы, но смотрю даже не на актеров, а на массовку, второстепенных актеров, на что раньше даже не обращал внимания. Я раньше думал, да наверное, и многие думают, что в фильмах это обычные люди ходят на фонах… Аннн… нет!) Бывают, конечно, реальные прохожие попадают в кадр, но это редко и случаются даже очень интересные истории с такими прохожими. Но об этом потом.

И вот походив на первые передачи, начинал общаться с людьми и узнавать, что, да, как? Начали давать ссылки, группы, сайты. И в общей сложности я за год побывал в сорока проектах. В некоторых побывал в постоянной массовке на несколько дней, в некоторых даже был в групповке. Познакомился со многими людьми, бывало даже обмолвишься парой слов со звездами. Со мной даже здоровался Саша Петров. Ну и тут еще открылся спортивный интерес- селфиться со звездами. Со многими получилось сфоткаться, с некоторыми, по разным причинам не получалось. Это конечно со временем утихает, но новые лайки в соцсетях возбуждают дальнейший интерес. Все начинают желать успеха. Давай! Говорят- прорывайся, становись звездой! Когда Оскар получишь? Думают это так просто)
Немного расскажу про то, как можно попасть на съемки. На просторах интернета есть не мало сайтов, групп в соцсетях, группы в WhatsApp, Telegram, различные агентства. Но все это надо проверять, потому что везде могут «кинуть». Если Вы увидели заманчивое объявление и Вас просят сделать портфолио, купить куртку, GSM-карту, сделать какой-нибудь взнос. Это скорее всего будут мошенники. После того как Вы переведете деньги, Вы их, скорее всего, больше не услышите и не увидите. 
А по советам я сделаю отдельную статью. </p>
<p>Так что буду рад видеть Вас на моем сайте. Пишите комментарии, присылайте свои истории, рассказы, предложения. Так же можно предлагать размещение рекламы.</p>
 
               </p>
</details>
 </div>
</div>
</div>     
</div>     
  
<div class="container">
  <h2>Статьи</h2>
    <div class="row">
 
        <div class="col-md-6 col-lg-3 col-sm-12" id="card">
            <div class="card">
                <div class="card-img">
                     <img align="center" src="image/posts/cheln/chelnochnicy.jpg" class="img-fluid">
                </div>                                             
                <div class="card-body">
                     <h4 class="card-title">Челночницы 2</h4>
                     <p class="card-text">
                      Мое участие в съемках сериала "Челночницы 2". Был оперативнико на заднем фоне.
                     </p>
                </div>
                <div class="card-footer">
                    <a href="article.php?id=<?php echo $art['id']; ?>" class="card-link">Смотреть дальше</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-sm-12" id="card">
            <div class="card">
                <div class="card-img">
                     <img align="center" src="image/posts/fit/fitness.jpg" class="img-fluid">
                </div>                                             
                <div class="card-body">
                     <h4 class="card-title">Фитнес</h4>
                     <p class="card-text">
                      Мое участие в съемках сериала "Фитнес". Был рыботником сцены. 
                     </p>
                </div>
                <div class="card-footer">
                    <a href="article.php?id=<?php echo $art['id']; ?>" class="card-link">Смотреть дальше</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-sm-12" id="card">
            <div class="card">
                <div class="card-img">
                     <img align="center" src="image/posts/souz/souz.png" class="img-fluid">
                </div>                                             
                <div class="card-body">
                     <h4 class="card-title">Союз спасения</h4>
                     <p class="card-text">
                      Немного об участии в съемках "Союз спасения". Фильм про декабристов.
                     </p>
                </div>
                <div class="card-footer">
                    <a href="article.php?id=<?php echo $art['id']; ?>" class="card-link">Смотреть дальше</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-sm-12" id="card">
            <div class="card">
                <div class="card-img">
                     <img align="center" src="image/posts/baltika/baltika.jpg" class="img-fluid">
                </div>                                             
                <div class="card-body">
                     <h4 class="card-title">Балтика 7 безалкогольное</h4>
                     <p class="card-text">
                      Съемки рекламного ролика про Балтику семерку безалкогольное.
                     </p>
                </div>
                <div class="card-footer">
                    <a href="article.php?id=<?php echo $art['id']; ?>" class="card-link">Смотреть дальше</a>
                </div>
            </div>
        </div>

    </div>
</div>
 
                    




<?php include "includes/footer.php"; ?>
<!--<footer>
        LiveInternet counter
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
       

        <span class="left">
      Все права защищены &copy; 2018
        </span>
        <span class="right"><a href="https://vk.com/volgochrome" target="_blank"><img src="image/vk.png"  alt="Группа в контакте" title="Группа в контакте"></a></span>
        <span class="right"> <img src="image/insta.png" alt="Группа в Instagram" title="Группа в Instagram"></span>
        <span class="right"><a href="https://www.youtube.com/channel/UCSsuliAb_a395kBXTKfbMAw?view_as=subscriber" target="_blank"> <img src="image/youtube.png" alt="Канал в YouTube" title="Канал в YouTube"></a></span></footer>


    </footer>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>
            