<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nikitin ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">

</head>
<body style="background-color: #474e5d;">
    <div class="topnav">
        <a href="index.php">Главная</a>
        <a href="shop.php">Магазин</a>
        <a class="active" href="about.php">О нас</a>
        <input type="text" placeholder="Поиск..">
        <?php
            session_start();
            if(!isset($_SESSION['Login'])) {?>
                
                <a href="login.php" style="float: right">Авторизация/Регистрация</a>
                
                <?php } else {?>
                    <a href="profile.php">Личный кабинет</a>
                    <a href="exit.php">Выход</a>
                    <a style="float: right;" class="trash" href="trash.php"><img src="assets/img/trash.png" alt="Корзина"><?php ?></a>
                    
                <?php }session_write_close();?>
    </div>


    <style>
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        h2 {
            color: white;

        }

        p {
            color: white;

        }


    </style>

    <div class="about-section">
        <h1>Контакты</h1>
    </div>
    <div style="text-align: center;">
        <h2>Адрес:</h2>
        <p>г. Омск, Суворова 7</p><br>
        <h2>Контактный номер телефона:</h2>
        <p>8-(000)-000-00-00</p><br>
        <h2>График работы:</h2>
        <p>Понедельник-пятница с 12:00 до 23:00</p><br>
    </div>

</body>
</html>

