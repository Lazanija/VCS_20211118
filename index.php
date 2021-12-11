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

print_r(array_slice($ceu, 2));

echo '<br>';

// d


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

sort($temp);
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

$temp = array_map('strlen', $arr);

echo min($temp) . '<br>' . max($temp);
echo '<br>';

/* 3 uzd */
/* 4 uzd */

$vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
$pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė",  "Jonė", "Kristė"];

echo '<br>';

/* 4 uzd */
/* Funkcijos */

function KmMile($kint, $koks) {
    if($koks === 'kilometrai') {
        return $kint * 0.621371;
    }
    if($koks === 'mylios') {
        return $kint * 1.60934;
    }
}
function KgPound($kint, $koks) {
    if($koks === 'kilogramai') {
        return $kint * 2.20462;
    }
    if($koks === 'poundai') {
        return $kint * 0.453592;
    }
}
function CelsFaren($kint, $koks) {
    if($koks === 'celcijus') {
        return $kint * 9/5 + 32;
    }
    if($koks === 'farenheitai') {
        return ($kint - 32)* 5/9;
    }
}

echo KmMile(20, 'kilometrai');
echo '<br>';
echo KgPound(10, 'kilogramai');
echo '<br>';
echo CelsFaren(10, 'celcijus');
echo '<br>';


/* Funkcijos */