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
spausdinti($skaitymas, $kiekis);





