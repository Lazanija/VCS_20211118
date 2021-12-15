<?php

function skaityti(string $failas, string $option = "r") {
    return fopen($failas, $option);
}

function spausdinti($myFile, $kiek): void {
    echo fread($myFile, $kiek);
    fclose($myFile);
}

$naujas = 'duom1.html';
$kiekis = filesize($naujas);

echo 'Failo ' . $naujas . ' rezultatas';

$skaitymas = skaityti($naujas);
/*spausdinti($skaitymas, $kiekis);*/

// 2 uzd
$manoVardas = 'Dominykas';
$naujas1 = fread($skaitymas, $kiekis);

echo preg_replace("/pasauli/", $manoVardas, $naujas1);

fclose($skaitymas);

// 3 uzd
$data = ["Dominykas" => 23];
json_encode($data);

$temp = file_get_contents('duom.json');
$tempArray = json_decode($temp, true);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
print_r($jsonData);
file_put_contents('duom.json', $jsonData);





