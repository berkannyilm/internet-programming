<?php
$cookie=$_COOKIE['Kullanici'];

if($cookie==""){
header("Location: index.php");
}else{
    echo "Hoşgeldin $cookie";
    echo "<br>";
    echo "<a href='cikis.php' target='_self'>Ana Sayfa</a>";
}
?>