<?php session_start();?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nikitin ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">

</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Главная</a>
        <a href="shop.php">Магазин</a>
        <a href="about.php">О нас</a>
        
        
        <input type="text" placeholder="Поиск..">
        
        <?php
            session_start();
            if(!isset($_SESSION['Login'])) {?>
                
                <a href="login.php" style="float: right">Авторизация/Регистрация</a>
                
                <?php } else {?>
                    <a href="profile.php">Личный кабинет</a>
                    <a href="exit.php">Выход</a>
                    <a style="float: right;" class="trash" href="trash.php"><img src="assets/img/trash.png" alt="Корзина"></a>
                <?php }session_write_close();?>
    </div><br>

    <div class="slideshow-container">

  <div class="mySlides fade" style="border: 1px solid #ccc;">
    <div class="numbertext">1 / 3</div>
    <img src="assets/img/slider1.jpg" style="width:100%">
     <!-- <div class="text">Caption Text</div>-->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="assets/img/slider2.jpg" style="width:100%">
    <!--<div class="text">Caption Two</div>-->
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

    <H1 style="text-align: center">Категории товаров</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/card1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Смартфоны</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Телевизоры</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card3.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Инструменты</b></h4>  
            </div>
        </div>
	</div>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/card4.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Бытовая техника</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card5.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Компьютеры</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card6.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Аксессуары</b></h4>  
            </div>
        </div>
	</div>
	</div><br><br><br>


    <div class="stock">
        <img src="assets/img/coup.jpg" style="width: 100%; height: 300px;"></img>
        <div class="centered" style="font-size: 34px"><b>Только сегодня скидки на все ноутбуки от Samsung 25%<b></div>
    </div><br><br><br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

