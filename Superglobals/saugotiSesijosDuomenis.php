<?php

session_start();
$name = $_SESSION['name'];
header('Location:sesijos_duomenys.php');

