<?php

$htmlcontent = '<!doctype html>
<html>
<head>
<title>Duomenys</title>
<body>
<h1>Labas pasauli</h1>
</body>
</html>
<html>
';

$vardas = 'duom1.html';
$puslapis = fopen($vardas, "w") or die("Nepavyksta atidaryti failo!");
fwrite($puslapis, $htmlcontent);

if(file_exists($vardas)) {
    echo "Failas jau sukurtas";
} else {
    echo "Failas nerastas";
}