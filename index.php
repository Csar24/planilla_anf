<?php
session_start();
// header('Location: Vista/login.php');
if(!isset($_SESSION['usuario']))
{
    header('Location: Vista/login.php');
}else
{
    header('Location: Vista/home.php');
}
?>