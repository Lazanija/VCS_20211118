<?php

/* 1 uzd */

$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
] ;

// a
foreach ($ceu as $key => $value) {
    echo $key . ' sostinė yra ' . $value . '<br>';
}

echo '<br>';

// b
ksort($ceu);
foreach ($ceu as $key => $value) {
    echo $key . ' sostinė yra ' . $value . '<br>';
}

echo '<br>';

// c
$max = count($ceu);
for ($i=0;$i<$max; $i += 2) {
    $key = array_keys($ceu)[$i];
    $value = $ceu[$key];
    echo $key . ' sostinė yra ' . $value . '<br>';
}

echo '<br>';

// d

foreach ($ceu as $key => $value) {
    if(str_contains($key, "A") || str_contains($value, "A")) {
        echo $key . ' sostinė yra ' . $value . '<br>';
    }
}
// e



/* 1 uzd */
/* 2 uzd */
echo '<br>';

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73,
    75, 79, 73];

$avg = array_sum($temp)/count($temp);
echo 'Vidutine temp : ' . $avg;

echo '<br>';

sort($temp);
echo "Penkios žemiausios temp: ";
for($x=0;$x<5;$x++) {
    echo $temp[$x] . ", ";
}

echo '<br>';

$ilgis = count($temp);
echo "Penkios aukščiausios temp: ";
for($x=$ilgis - 5; $x < $ilgis; $x++) {
    echo $temp[$x] . ", ";
}
echo '<br>';
/* 2 uzd */
/* 3 uzd */
echo '<br>';

$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$buvesMax = $max = -9999;
$k = null;
foreach ($arr as $key => $value) {
    $max = strlen($value);
    if ($max > $buvesMax) {
        $k = $key;
        $buvesMax = $max;
    }
}
if (null !== $k) {
    echo "Max elem: $arr[$k], eiles nr: $k";
    echo '<br>';
} else {
    echo "Nerasta";
    echo '<br>';
}

echo '<br>';
/* 3 uzd */
/* 4 uzd */
$vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
$pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];
$c = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];

$kiekis = count($c);
for ($i = 0; $i < $kiekis; $i+=2) {
    echo $vardai[$c[$i] - 1] . ' ' . $pavardes[$c[$i+1] - 1] . '<br>';
}
echo '<br>';
/* 4 uzd */
/* Funkcijos */
function KmMile(int|float $kint, string $koks): float {
    if($koks === 'kilometrai') {
        return $kint * 0.621371;
    }
    if($koks === 'mylios') {
        return $kint * 1.60934;
    }
}
function KgPound(int|float $kint, string $koks): float {
    if($koks === 'kilogramai') {
        return $kint * 2.20462;
    }
    if($koks === 'poundai') {
        return $kint * 0.453592;
    }
}
function CelsFaren(int|float $kint, string $koks): float {
    if($koks === 'celcijus') {
        return $kint * 9/5 + 32;
    }
    if($koks === 'farenheitai') {
        switch($kint) {
            case ($kint - 32)* 5/9 < -50:
                echo 'Jūs tikriausiai negyvas : ';
                break;
            case ($kint - 32)* 5/9 < 0:
                echo 'Lauke formuojasi ledas : ';
                break;
            case ($kint - 32)* 5/9 < 15:
                echo 'Lauke vėsu : ';
                break;
            case ($kint - 32)* 5/9 > 15:
                echo 'Lauke šilta : ';
                break;
            case ($kint - 32)* 5/9 > 30:
                echo 'Geriau į lauką neiti : ';
                break;
            case ($kint - 32)* 5/9 > 50:
                echo 'Jūs tikriausiai negyvas : ';
                break;
        }
        return ($kint - 32)* 5/9;
    }
}
echo KmMile(100, 'mylios');
echo '<br>';
echo KgPound(10, 'kilogramai');
echo '<br>';
echo CelsFaren(-60, 'farenheitai');
echo '<br>';
echo '<br>';
/* Funkcijos */

/* OOP */
include "phpSession/Car.php";

$tesla = new Car();

$tesla->modelis = 'Model S';
$tesla->spalva = 'Black';
$tesla->greitis = 249;
$tesla->durys = 4;

echo $tesla->model();
echo '<br>';
echo $tesla->color();
echo '<br>';
echo $tesla->doors();
echo '<br>';
$tesla->drive(2);
echo '<br>';
echo 'Rida: ' . $tesla->mileage();

