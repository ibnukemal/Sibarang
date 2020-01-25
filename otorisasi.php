<?php
ob_start();
session_start();

if(!isset($_SESSION['username'])||(!isset($_SESSION['password'])))
{
header("location:index.php?Silahkan Login Dahulu!");
}

ob_end_flush();
?>