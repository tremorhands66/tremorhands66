<?php

session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: /nikitin/register.php');
}
else
{
?>

<?php 
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE Number='$login'");
    
    $row = mysqli_fetch_array($testquery);
    //echo $row[4];


?>


    <style>
        input {
            padding: 10px;
            padding-left: 35px;
            width: 180px;
            margin-left: 19px;
            margin-top: 10px;
            font-family: 'Open Sans', 'Segoe UI', sans-serif;
            font-weight: 700;
            border: 1px solid #cbd3e0;
            color: #b3bac4;
        }

        .grid-4 {
            display: inline-block;
            width: 235px;
        }
        .grid-8 {
            padding-bottom: 25px;
        }


        .btn {
	display: inline-block;	
	box-sizing: border-box;
	padding: 0 15px;
	margin: 0 15px 15px 0;
	outline: none;
    width: 156px;
	border: none;  
	border-radius: 4px;
	height: 52px;
	line-height: 36px;
	font-size: 14px;
	font-weight: 650;
	text-decoration: none;
	color: #fff;
	background-color: #1a73e8;
	position: relative;
	overflow:hidden;
	vertical-align: top;
	cursor: pointer;
	user-select: none;
	appearance: none;
	touch-action: manipulation; 
	z-index: 1;
}
.btn span{
	position: absolute;
	background: #fff;
	transform: translate(-50%, -50%);
	border-radius: 50%;
	pointer-events: none;
	animation: btn_ripples 0.6s linear infinite;
}
@keyframes btn_ripples {
	0% {
		width: 0px;
		height: 0px;
		opacity: 0.5;
	}
	100% {
		width: 1000px;
		height: 1000px;
		opacity: 0;
	}
}
.btn:hover {
	box-shadow: 0 1px 2px 0 rgb(26 115 232 / 45%), 0 1px 3px 1px rgb(26 115 232 / 30%);
	background-color: #297be6;
}
.btn:active {
	box-shadow: 0 1px 2px 0 rgb(26 115 232 / 45%), 0 2px 6px 2px rgb(26 115 232 / 30%);
	background-color: #1a73e8 !important;
}
.btn:focus-visible {
	box-shadow: 0 0 0 3px lightskyblue;
}
    </style>

    <br><H1 style="text-align: center;">Личный кабинет</H1>

    <form  class="form-lk" action="/nikitin/login_system/" method="POST">
        <div style="display: flex; justify-content: center;">
			<div class="grid-4">
				<h2>Ваше имя</h2><input class="data" value="<?php echo $row[1]; ?>" />
                <h2>Ваша фамилия</h2><input class="pass" value="<?php echo $row[2]; ?>">
                <h2>Ваше отчество</h2><input class="pass" value="<?php echo $row[3]; ?>">        
			</div>
				
			<div class="grid-4">
				<h2>Ваш номер телефона</h2><input class="data" value="<?php echo $row[4]; ?>" />
                <h2>Ваша почта</h2><input class="data" value="<?php echo $row[5]; ?>" />
			</div><br>
        </div>
		    <button style="margin-top: 12px;position: relative;left: 46%;" type="submit" class="btn">Сохранить</button>

	</form>

<?php
}
?>
