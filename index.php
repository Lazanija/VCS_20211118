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


/* 1 uzd */
/* 2 uzd */
echo '<br>';

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73,
    75, 79, 73];

$avg = array_sum($temp)/count($temp);
echo 'Vidutine temp : ' . $avg;

echo '<br>';

sort($temp);
for($x=0;$x<5;$x++) {
    echo $temp[$x];
    echo "<br>";
}


/* 2 uzd */