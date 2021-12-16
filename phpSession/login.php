<?php

session_start();

if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
    $_SESSION['LoggedIn'] = true;
    header("Location:admin.php");
} else {
    echo "Blogai suvesti duomenys";
}