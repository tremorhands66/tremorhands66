<?php session_start(); ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nikitin ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <style>

    h5 {
        text-align:center
    }

    button {
        margin-left:60px;
        margin-bottom: 20px

    }


    </style>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Главная</a>
        <a class="active" href="shop.php">Магазин</a>
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


    <H1 style="text-align: center">Телефоны</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/t1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>A52</b></h4> 
                <h5>12000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="A52"/>
                    <input type="hidden" name="price" value="12000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/t2.png" alt="Avatar" style="width: 100%">
            <div class="container">
                <h4><b>Note 10 plus</b></h4> 
                <h5>31000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="Note 10 plus"/>
                    <input type="hidden" name="price" value="31000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/t3.png" alt="Avatar" style="width:78%">
            <div class="container">
                <h4><b>S20+</b></h4> 
                <h5>15000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="S20+"/>
                    <input type="hidden" name="price" value="15000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>
	</div>

    <H1 style="text-align: center">Телевизоры</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/tv2.png" alt="Avatar" style="width:86%">
            <div class="container">
                <h4><b>Philips under</b></h4> 
                <h5>45000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="Philips under"/>
                    <input type="hidden" name="price" value="45000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>LG Ledblack</b></h4> 
                <h5>60000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="LG Ledblack"/>
                    <input type="hidden" name="price" value="60000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/tv1.png" alt="Avatar" style="width:86%">
            <div class="container">
                <h4><b>Samsung RU7200</b></h4>  
                <h5>37000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="Samsung RU7200"/>
                    <input type="hidden" name="price" value="37000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>
	</div>

    <H1 style="text-align: center">Ноутбуки</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/n1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>HP Pavilion</b></h4> 
                <h5>12000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="HP Pavilion"/>
                    <input type="hidden" name="price" value="12000"/>
                    <button>Добавить в корзину</button>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/n2.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Acer Aspire</b></h4> 
                <h5>25000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="Acer Aspire"/>
                    <input type="hidden" name="price" value="25000"/>
                    <button>Добавить в корзину</button>
                    
                </form>    
            </div>
        </div>

        <div class="card">
            <img src="assets/img/n3.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Asus Zenbook</b></h4>
                <h5>43000₽</h5>
                <form action ="buy.php" method="POST">
                    <input type="hidden" name="title" value="Asus Zenbook"/>
                    <input type="hidden" name="price" value="43000"/>
                    <button>Добавить в корзину</button>
                </form>        
            </div>
        </div>
	</div>


</body>
</html>

