<?php
include("adminAyar.php");
session_start();
ob_start();
if(($_POST["username"]==$username) and ($_POST["password"]==$password)){
$_SESSION["login"] = "true";
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
header("Location:admin.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=girisForm.php");
}
ob_end_flush();
?>