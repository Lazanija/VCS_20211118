<?php

$cookieName = 'naudotojas';
$cookieValue = 'Vardas Vardenis';
setcookie($cookieName, $cookieValue, time() + (86400 * 2));
header('Location:sausaineliu_duomenys.php');
