<?php

include 'Student.php';
include 'Grupe.php';

$studentai = [];
for ($i=0; $i<5; $i++) {
    $studentai[] = new Student();
}

$asmuo = new Person();

$grupe = new Grupe('KCS77V', 72);

echo $grupe->gautiName();
echo '<br>';
echo $grupe->gautiTrukme();
echo '<br>';

foreach ($studentai as $studentas) {
    echo $studentas->asmensKodas . '<br>';
}