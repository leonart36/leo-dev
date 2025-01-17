<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
    <meta name="yandex-verification" content="0d744946c4c7099f" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Главная страница сайта, где будут выкладываться информация о съемках, статьи, истории и многое другое">
    <meta name="keywords" content="как, попасть, знаменитости, кино, реклама, актеры, сериал, смотреть, сниматься, актер, стать, actorslife">
    <meta name="author" content="Koshelev Artem">

    <link rel="stylesheet" href="css/main.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41309907-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-41309907-2');
        gtag('set', {
            'user_id': 'USER_ID'
        }); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
        ga('set', 'userId', 'USER_ID'); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3282788961116352",
            enable_page_level_ads: true
        });
    </script>
    <title>Главная страница</title>
</head>

<body>
    <nav class="navbar navbar-expand-md  navbar-dark sticky-top">
        <a href="#" class="navbar-brand">
            <img src="image//logo.png" alt="logo" width="50" height="50">
        </a>
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
             <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="shooting.html" class="nav-link">Съемки</a>
                </li>
                <li class="nav-item active">
                    <a href="articl.html" class="nav-link">Статьи</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">Разное</a>
                </li>
                <li class="nav-item active">
                    <a href="articles/about_site.html" class="nav-link">О сайте</a>
                </li>
            </ul>
            <!--Регистрация и авторизация-->
            <?php
                require('connect.php');

                if(isset($_POST['login'])&& isset($_POST[password]))
                {
                    $login = $_POST['login'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    //записываем в БД
                    $query = "INSERT INTO user (login, email, password) VALUES (' $login','$email','$password')";
                    $result = mysqli_query($connection, $query); //передаем результат в нашу БД
                    //создание аллертов
                    if($result){
                        $smsg = "Регистрация прошла успешно";
                    }else {
                            $fsmsg = "Ошибка";
                        }
                    
                }
            ?>
            <div class="form_for_input">
                <div class="form-signin" metod="POST">
                    <?php if(isset($smsg)){ ?><div class="alert alert-success" role = "alert"> <?php echo $smsg; ?> </div><?php }?>
                    <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role = "alert"> <?php echo $fsmsg; ?> </div><?php }?>


                    <input type="text" name="login" class="form-control" placeholder = "Ваш логин" required>
                    <input type="email" name="email" class="form-control" placeholder = "Ваш e-mail" required>
                    <input type="password" name="password" class="form-control" placeholder = "Ваш пароль" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
                </div>
            </div>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input type="text" class="form-control mr-sm-2" placeholder="Search" area-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </form>
        -->
            <!-- <div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'http://leo-dev.ru','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Поиск по leo-dev','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2338950,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'Поиск','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}">
                <form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="2338950" /><input type="hidden" name="l10n" value="ru" /><input type="hidden" name="reqenc" value="" /><input type="search" name="text" value="" /><input type="submit" value="Найти" /></form>
            </div>
            <style type="text/css">
                .ya-page_js_yes .ya-site-form_inited_no {
                    display: none;
                }
            </style>
            <script type="text/javascript">
                (function(w, d, c) {
                    var s = d.createElement('script'),
                        h = d.getElementsByTagName('script')[0],
                        e = d.documentElement;
                    if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                        e.className += ' ya-page_js_yes';
                    }
                    s.type = 'text/javascript';
                    s.async = true;
                    s.charset = 'utf-8';
                    s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                    h.parentNode.insertBefore(s, h);
                    (w[c] || (w[c] = [])).push(function() {
                        Ya.Site.Form.init()
                    })
                })(window, document, 'yandex_site_callbacks');
            </script>-->
        </div>
    </nav>

    <div class="container-fluid text-center ">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="shooting.html">Съемки</a></p>
                <p><a href="articl.html">Статьи</a></p>
                <p><a href="#">Творчество</a></p>
                <p><a href="#">Объявления</a></p>
                <p><a href="articles/about_site.html">О сайте</a></p>
                
            </div>
            <div class="col-sm-8 text-left">

                <div class="container">
                    <h2>Съемки и статьи</h2>
                    <div class="row">
                        <div id="ya-site-results" onclick="return {'tld': 'ru','language': 'ru','encoding': '','htmlcss': '1.x','updatehash': true}"></div>
                        <script type="text/javascript">
                            (function(w, d, c) {
                                var s = d.createElement('script'),
                                    h = d.getElementsByTagName('script')[0];
                                s.type = 'text/javascript';
                                s.async = true;
                                s.charset = 'utf-8';
                                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                                h.parentNode.insertBefore(s, h);
                                (w[c] || (w[c] = [])).push(function() {
                                    Ya.Site.Results.init();
                                })
                            })(window, document, 'yandex_site_callbacks');
                        </script>
                         <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/tasks/task1/task1.html" class="card-link">
                                        <img align="center" src="articles/tasks/task1/logo.png" loading='lazy' class="img-fluid" alt="Загадка">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Задачка на логику</h4>
                                    <p class="card-text">
                                        Попробуйте решить математическую задачку на логику про цифры. Проверьте свою смекалку
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Разное</small></div>
                                    <div><small>Дата публикации: 18.04.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/tasks/task1/task1.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                                <div class="card">
                                    <div class="card-img">
                                        <a href="articles/articles/golos/golos.html" class="card-link">
                                            <img align="center" src="articles/articles/golos/golos.jpg" loading='lazy' class="img-fluid" alt="Случай на Голосе">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Случай на Голосе</h4>
                                        <p class="card-text">
                                            Одна подслушеная история, которая случилась с Биланом на музыкальном проекте Голосе.
                                        </p>
                                        <hr>
                                        <div><small>Рубрика: Статьи</small></div>
                                        <div><small>Дата публикации: 07.04.2019</small></div>
                                        <div><small>Автор: Leonart</small></div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="articles/articles/golos/golos.html" class="card-link">Смотреть дальше</a>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/articles/about_shooting/about_shooting.html" class="card-link">
                                        <img align="center" src="articles/articles/about_shooting/logo.jpg" loading='lazy' class="img-fluid" alt="Про съемки">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Про съемки</h4>
                                    <p class="card-text">
                                        Хочу рассказать про то как и кем можно попасть на съемки фильмов, сериалов и рекламы.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Статьи</small></div>
                                    <div><small>Дата публикации: 10.03.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/articles/about_shooting/about_shooting.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/articles/scammers/scammers.html" class="card-link">
                                         <img align="center" src="articles/articles/scammers/scammers.jpg" loading='lazy' class="img-fluid" alt="Про мошенников">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Про мошенников</h4>
                                    <p class="card-text">
                                        Хочу рассказать про основные схемы мошенничества, связанных со съемками для АМС.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Статьи</small></div>
                                    <div><small>Дата публикации: 03.03.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/articles/scammers/scammers.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/movies/pirogova/pirogova.html" class="card-link">
                                        <img align="center" src="articles/movies/pirogova/pirogova.jpg" loading='lazy' class="img-fluid" alt="Про съемки в ИП Пирогова">
                                    </a>
                                 </div>
                                <div class="card-body">
                                    <h4 class="card-title">ИП Пирагова</h4>
                                    <p class="card-text">
                                        Как я принимал участие в съемках сериала "ИП Пирагова". Побывал в роли обэповца.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Сериал</small></div>
                                    <div><small>Дата публикации: 28.02.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/movies/pirogova/pirogova.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                        <a href="articles/movies/chelnochnicy/chelnochnicy.html" class="card-link">
                                            <img align="center" src="articles/movies/chelnochnicy/chelnochnicy.jpg" loading='lazy' class="img-fluid" alt="Про съемки в Челночницы 2">
                                        </a>
                                 </div>
                                <div class="card-body">
                                    <h4 class="card-title">Челночницы 2</h4>
                                    <p class="card-text">
                                        Мое участие в съемках сериала "Челночницы 2". Был оперативнико на заднем фоне.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Сериал</small></div>
                                    <div><small>Дата публикации: 05.02.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/movies/chelnochnicy/chelnochnicy.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/movies/fitness/fitness.html" class="card-link">
                                        <img align="center" src="articles/movies/fitness/logo.jpg" loading='lazy' class="img-fluid" alt="Про съемки в Фитнес">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Фитнес</h4>
                                    <p class="card-text">
                                        Мое участие в съемках сериала "Фитнес". Был рыботником сцены. И сидел в зале на конкурсе.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Сериал</small></div>
                                    <div><small>Дата публикации: 13.02.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/movies/fitness/fitness.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/movies/souz/souzspasiniya.html" class="card-link">
                                        <img align="center" src="image/posts/souz/souz.png" loading='lazy' class="img-fluid" alt="Про съемки в Союзе Спасения">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Союз спасения</h4>
                                    <p class="card-text">
                                        Немного расскажу о первых участиях в съемках "Союз спасения". Фильм про декабристов.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Фильм</small></div>
                                    <div><small>Дата публикации: 13.02.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/movies/souz/souzspasiniya.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 col-sm-12" id="card">
                            <div class="card">
                                <div class="card-img">
                                    <a href="articles/movies/baltika/baltika.html" class="card-link">
                                        <img align="center" src="image/posts/baltika/baltika.jpg" class="img-fluid" loading='lazy' class="img-fluid" alt="ПРо съемки в рекламе">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Балтика 7 безалкогольное</h4>
                                    <p class="card-text">
                                        Съемки рекламного ролика про Балтику семерку безалкогольное.
                                    </p>
                                    <hr>
                                    <div><small>Рубрика: Реклама</small></div>
                                    <div><small>Дата публикации: 11.02.2019</small></div>
                                    <div><small>Автор: Leonart</small></div>
                                </div>
                                <div class="card-footer">
                                    <a href="articles/movies/baltika/baltika.html" class="card-link">Смотреть дальше</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="newsfromyandex">
                        <style>.ya-news__title{font-size:100%;font-weight:700;margin-bottom:.5em}.ya-news__date{font-size:85%;margin-right:.5em}.ya-news__informer{font-size:85%;margin-bottom:.3em}.ya-news__description{font-size:85%;margin-bottom:.5em}.ya-news__all{font-size:80%;margin-top:.3em}</style><script src="//news.yandex.ru/ru/movies5.utf8.js" charset="utf-8"></script><script>(function(w,rubric){var data=w[rubric];if(!data||!data.length){return;}function formatDate(ts){var d=new Date(ts*1000);return d.getHours()+':'+('0'+d.getMinutes()).substr(-2);}var html='<Q-OMVY class="ya-news__title"><a href="//news.yandex.ru/" target="_blank">Яндекс.Новости</a></Q-OMVY>';for(var i=0;i<data.length;i++){var item=data[i];html+='<Q-OMVY><span class="ya-news__date">'+item.date+'&nbsp;'+item.time+'</span><span class="ya-news__title"><a href="'+item.url+'" target="_blank">'+item.title+'</a></span></Q-OMVY><Q-OMVY class="ya-news__description">'+item.descr+'</Q-OMVY>';}html+='<Q-OMVY class="ya-news__all"><a href="//news.yandex.ru/" target="_blank">Все новости на '+formatDate(w.update_time_t)+'</a></Q-OMVY>';document.write(html);}(window, 'm_movies'));</script>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-2 sidenav">
                    <div class="well">
                            <!-- Yandex.RTB R-A-387893-1 -->
                            <div id="yandex_rtb_R-A-387893-1"></div>
                            <script type="text/javascript">
                                (function(w, d, n, s, t) {
                                    w[n] = w[n] || [];
                                    w[n].push(function() {
                                        Ya.Context.AdvManager.render({
                                            blockId: "R-A-387893-1",
                                            renderTo: "yandex_rtb_R-A-387893-1",
                                            async: true
                                        });
                                    });
                                    t = d.getElementsByTagName("script")[0];
                                    s = d.createElement("script");
                                    s.type = "text/javascript";
                                    s.src = "//an.yandex.ru/system/context.js";
                                    s.async = true;
                                    t.parentNode.insertBefore(s, t);
                                })(this, this.document, "yandexContextAsyncCallbacks");
                            </script>
                        </div>
                <div class="well">
                    <img align="center" src="image/rekl.jpg" class="img-fluid">
                </div>
                <div>
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- reklama -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3282788961116352" data-ad-slot="6375933753" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer font-small unique-color-dark pt-0">
        <div class="primary-color">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
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
                        <a href="https://webmaster.yandex.ru/sqi?host=leo-dev.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?leo-dev.ru&theme=light&lang=ru" /></a>

                        <!-- Yandex.Metrika counter -->
                        <script type="text/javascript">
                            (function(m, e, t, r, i, k, a) {
                                m[i] = m[i] || function() {
                                    (m[i].a = m[i].a || []).push(arguments)
                                };
                                m[i].l = 1 * new Date();
                                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
                            })
                            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                            ym(52353820, "init", {
                                id: 52353820,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true
                            });
                        </script>
                        <noscript><div><img src="https://mc.yandex.ru/watch/52353820" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                        <!-- /Yandex.Metrika counter -->


                        <span class="left">
                            Все права защищены &copy; 2019
                        </span>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <span class="right"><a href="https://vk.com/volgochrome" target="_blank"><img src="image/vk.png"  alt="Группа в контакте" title="Группа в контакте"></a></span>
                        <span class="right"> <img src="image/insta.png" alt="Группа в Instagram" title="Группа в Instagram"></span>
                        <span class="right"><a href="https://www.youtube.com/channel/UCSsuliAb_a395kBXTKfbMAw?view_as=subscriber" target="_blank"> <img src="image/youtube.png" alt="Канал в YouTube" title="Канал в YouTube"></a></span></footer>

    </div>
    </div>
    </div>
    </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>