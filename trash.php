<?php session_start(); ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Nikitin ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <style>

.btn {
  border: none; /* Remove borders */
  color: white; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}

table { 
            width: 480px; 
        } 
          
table th { 
                padding: 10px; 
                background-color: #48577D; 
                color: #fff; 
                text-align: left; 
            } 
              
table td { 
                padding: 5px; 
            } 
              
table tr { 
                background-color: #d3dcf2; 
            } 
    </style>
</head>
<body>
<div class="topnav">
        <a href="index.php">Главная</a>
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
                    <a style="float: right;" href="trash.php"><img src="assets/img/trash.png" alt="Корзина"></a>
                <?php }session_write_close();?>
    </div><br>


<?php
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $result_set = mysqli_query($connect, "SELECT * FROM `trash` WHERE user_name='$login'"); 
    $totalPrice = 0;         



    ?>

<div style="margin-left:35%;margin-right:15%;">
    <table> 
        <tr> 
            <th>Название</th> 
            <th>Цена</th> 
        </tr>
    
<?php
    while ($row = $result_set->fetch_assoc()) {
        $totalPrice = $totalPrice + $row["price"];
        
        ?>



<style>


</style>

        <tr> 
            <td><?php echo $row["title"] ?></td> 
            <td><?php echo $row["price"] ?>₽</td> 
            
            <td>
            <form action ="removeTrash.php" method="POST">
                <button>Удалить</button>
                <?php 
                $_SESSION['itemsID'] = $row["id"];
                    
                ?>
            </form>     



            </td> 
        </tr> 




    <?php } ?>

    </table>

    <div style="display: flex;">
        <button style="margin-left: 55px; margin-right: 50px" class="btn success">Оформить заказ</button>
        <p>Итого: <?php echo $totalPrice ?> ₽</p>
    </div>
</div>
</body>
</html>