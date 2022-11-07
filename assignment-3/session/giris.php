<?php
session_start();

$usera = "Berkan";
$sifrea = "1234";

$user = $_POST['ad'];
$sifre = $_POST['sifre'];

if (($usera==$user) and ($sifrea==$sifre)) 
{
$_SESSION["Kullanici"]=$user;
header('Location:hesap.php');
}
else 
{
echo "Giriş Hatalı";
}

?>