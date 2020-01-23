<?php
    require "db/db.php";
    require "config.php";
?>
 <?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/forvue.css">

    <title><?php echo $art['title']; ?></title>
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
            <?php 
            $page = $_GET['id'];
            echo $page;
               $article = mysqli_query($connection, "SELECT * FROM `articles` WHERE  `id` = " . $page );//(int) требуется для безопасности и применяется только для id
                
                if(mysqli_num_rows($article)<=0)
                {
                    ?>
                        <div class="container pt-5" id="app">
                             <div class="row mb-5">
                                 <div class="col">
                                    <h1>Статья не найдена!</h1>
               
                                 </div>
                             </div>
                        </div>
                <?php
                } else
                {
                $art = mysqli_fetch_assoc($article);
                mysqli_query($connection, "UPDATE `articles` SET `views`= `views` + 1 WHERE `id` = " . (int) $art['id']  );//функция увеличения просмотров
                ?>
                
                <div class="container pt-5" id="app">
                             <div class="row mb-5">
                                 <div class="col">
                                    <h1><?php echo $art['title'];?></h1>
                                    <p><?php echo $art['text'];?></p>
                                    <a href=""><?php echo $art['views'];?> просмотров</a>
               
                                 </div>
                                
                             </div>
                        </div>
                <?php
                }
            ?>

                    <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

<script type="text/javascript">
  VK.init({apiId: 4191106, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>


                 <div class="container pt-5" id="app">
                             <div class="row mb-5">
                                 <div class="col">
                                    <h2>Комментарии</h2>
                                    <?php
                                        $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = " . (int) $art['id']);
                                        if (mysqli_num_rows($comments)<=0)
                                        {
                                            echo "Комментариев нет!";
                                        }
                                        
                                        while($comment = mysqli_fetch_assoc($comments))
                                        {
                                            ?>
                                                Автор: <a href="/article.php?id=<?php echo $comment['articles_id'];?>"><?php echo $comment['author'];?></a>
                                            <p><?php echo $comment['text'];?></p>
                                            <small>Дата: <?php echo $comment['pubdate'] ;?></small><br><hr>
                                            
                                            <?php
                                        }
                                    ?><br><hr>
                                <a href="#comment-add-form">Добавить свой комментарий</a>
                                 </div>
                                
                             </div>
                        </div><div class="container pt-5" id="comment-add-form">
                             <div class="row mb-5">
                                 <div class="col">
                                    <h2>Добавить комментарий</h2>
                                        <div class="block__content">
                                            <form class="form" method="POST" action="./article.php?id=<?php echo $art['id'];?> #comment-add-form">
                                          
                                           <?php
                                            

                                            if( isset($_POST['do_post']))
                                            {
                                                $errors=array();
                                                if($_POST['name']==''){
                                                $errors[]="Введите имя!";
                                                }
                                            
                                            
                                                if($_POST['nickname']==''){
                                                $errors[]="Введите никнейм!";
                                                } 
                                            
                                            
                                                if($_POST['email']==''){
                                                $errors[]="Введите E-mail!";
                                                }
                                            
                                            
                                                if($_POST['text']==''){
                                                $errors[]="Введите текст комментария!";
                                                }
                                            } 
                                            if(empty($errors))//если массив errors пустой, то добавляем комментарий
                                            {
                                               
                                                mysqli_query($connection, "INSERT INTO `comments` (`author`, `nickname`, `email`, `text`, `pubdate`, `articles_id`) VALUES
                                                ('".$_POST['name']."', '".$_POST['nickname']."','" .$_POST['email']."','" .$_POST['text']."', NOW(), '" .$art['id']."')");
                                                echo '<span style="color: green; font-wight: bold; margin-bottom: 10px; display: block;">Комментарий успешно добавлен!</span>';
                                               
                                               

                                            }else{
                                                echo '<span style="color: red; font-wight: bold; margin-bottom: 10px; display: block;">'.$errors['0'] .'</span>';
                                            }
                                        
                                            ?>
                                                <div class="form__group">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="text" name="name" class="form__control" 
                                                            placeholder="Имя" value="<?php echo $_POST['name'];?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="nickname" class="form__control" 
                                                            placeholder="Никнейм" value="<?php echo $_POST['nickname'];?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="email" class="form__control" 
                                                            placeholder="E-mail (не будет показан)"value="<?php echo $_POST['email'];?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__group">
                                                    <textarea class="form__control" id="" name="text" placeholder="Текст комментария..." ><?php echo $_POST['text'];?></textarea>
                                                </div>
                                                <div class="form__control">
                                                    <input type="submit" name="do_post" value="Добавить комментарий" class="form__control">
                                                </div>
                                    </form>
                                        </div>
                                 </div>
                                
                             </div>
                        </div>
        <?php include "includes/footer.php"; ?>
     </body>
 </html>