<?php

session_start();
$_SESSION['username'] = 'Gufran';
$_SESSION['id'] = '123';



$username = $_SESSION['username'];
$id = $_SESSION['id'];

echo $username;
echo '<br>';

echo $id;

echo 'Your Session is Started'.'<br>';



?>
