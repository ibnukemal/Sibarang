<?php
ob_start();

session_start();
include "koneksi.php";

$login = $_POST['login'];
if(isset($login))
{
$username=$_POST['username'];
$password=$_POST['password'];

$perintah = "select * from userlogin where username='$username' and password='$password'";
$exe = mysql_query($perintah);
$cek = mysql_num_rows($exe);

$row = mysql_fetch_array($exe);

if($cek==1)
{
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	
	$iduser = $row['iduser'];
	header("location:home.php?iduser=$iduser");
}
else
{
	header("location:index.php");
}

}
ob_end_flush();
?>