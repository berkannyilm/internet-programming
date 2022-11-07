<?php
session_start();
$session=$_SESSION['Kullanici'];

if($session==""){
header("Location: index.php");
}else{
    echo "Hoşgeldin $session";
    echo "<br>";
    echo "<a href='cikis.php' target='_self'>Ana Sayfa</a>";
}
?>