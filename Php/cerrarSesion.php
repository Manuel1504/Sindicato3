<?php

session_start();

$_SESSION['id'];
$_SESSION['nombre'];

session_destroy();
echo 1;

?>
