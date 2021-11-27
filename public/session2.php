<?php

session_start();

$username = $_SESSION['username'];
$id = $_SESSION['id'];


unset($_SESSION['username']);

if(isset( $_SESSION['username']))
{
    echo 'Your Data is Set in the Session.' . '<br>';
}
else
{
 echo 'Your Data is not Set in the Session.' . '<br>';
}

echo $username.'<br>';
echo $id;

session_destroy();
