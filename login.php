<?php
session_start();
if(isset($_SESSION['Login']))
{
    header("Location: /petrunev/index.php");
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация|Авторизация</title>
    <link type="text/css" href="resources/style.css" rel="stylesheet">


<style>

input {
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input:focus {
    border: 3px solid #555;
}


.btn3 {
    display: inline-block; 
    box-sizing: border-box;
    padding: 0 20px;
    margin: 0 15px 15px 0;
    outline: none;
    border: none; 
    border-radius: 4px;
    height: 32px;
    line-height: 32px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    background-color: #3775dd;
    box-shadow: 0 2px #21487f;
    cursor: pointer;
    user-select: none;
    appearance: none;
    touch-action: manipulation; 
    vertical-align: top;
}
.btn3:hover {
    background-color: #002fed;
}
.btn3:active {
    background-color: #2f599e !important;
}
.btn3:focus-visible {
    box-shadow: 0 0 0 3px lightskyblue;
}
</style>

</head>
<body>
<h1 style="text-align:center">Вход</h1>
<div style="display: flex; justify-content: center;" class="form-center">

	<form action="/nikitin/login_system/signin.php" method="post">
		<p>
		<input class="input_rl" type='text' name="Number" placeholder="Введите свой телефон">
		</p>
		<script>
        $(".input_rl").mask("+7(999)999-99-99");
    	</script>
		<p>
		<input class="input_rl" type="Password" name="Password" placeholder="Введите пароль">
		</p>
		<button class="btn3" type="submit" class="button-action">Войти</button>
		<p>
			<div style="font-weight: Bold; font-family: sans-serif;">У вас нет аккаунта? - <a href="/nikitin/register.php">Зарегистрируйтесь!</a></div>
		</p>
		<p>
			<div style="font-weight: Bold; font-family: sans-serif;">Хочешь вернустья ?- <a href="/nikitin/index.php">На главную!</a></div>
		</p>
	</form>
</div>
</body>
</html>