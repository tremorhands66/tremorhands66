<?php
session_start();
session_destroy();
session_write_close();
$_SESSION['Login'] = $Number;
header('Location: /nikitin/index.php');
?>