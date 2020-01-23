<?php require_once 'db/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    
    <!-- Don't use this in production: -->
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/shop.css">

<title>Примеры на PHP</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg fixed-top ">
                <a class="navbar-brand" data-value="home"href="index.php">Home</a>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="myvue.html">Пример с Vue.JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="react.html">Пример с React.JS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="index.php">Пример магазина на PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="testphp.php">Пример на PHP</a>
                </li>
            </ul>

        </div>
                
                
             </nav>

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
            <div class="card" >
                    <img class="card-img-top" src="image/shop/antenna.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Антенна</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">200 рублей</p>
                        <a href="#" class="btn btn-primary buy" data-price="200" data-product="Антенна">Купить</a>
                    
                      </div>
                      
                    </div>                   
                    
                    
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="card" >
                      <img class="card-img-top" src="image/shop/block.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Блок питания</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="price text-danger">200 рублей</p>
                          <a href="#" class="btn btn-primary buy" data-price="200" data-product="Антенна">Купить</a>
                      
                        </div> 
                      </div>                      
              </div> 
        </div>
    </div>
</section>

<div class="modal fade" id="card" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление заказа</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form id="buy" method="post" >
  <div class="form-group">
    <label for="name">Ваше имя</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Введите ваше имя" required>
    
  </div>
  <div class="form-group">
    <label for="email">E-male</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш e-mail" required>

  </div>
  <div class="form-group">
    <label for="product">Выбранный товар</label>
    <input type="text" class="form-control" name="product" id="product"  readonly>

  </div>
  <div class="form-group">
    <label for="price">Цена</label>
    <input type="text" class="form-control" name="price" id="price"  readonly>

  </div>
  <button type="submit" class="btn btn-primary">Купить</button>
</form>
      </div>
      
    </div>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/shop.js"></script>
</body>
</html>