<?php
session_start();
$_SESSION['LoggedIn'] = false;
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:loginForm.php");
?>