<?php

session_start();
require_once 'connect\connect.php';

$id = $_SESSION['itemsID'];

mysqli_query($connect, "DELETE FROM `trash` WHERE id='$id'");

echo $id;
header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>