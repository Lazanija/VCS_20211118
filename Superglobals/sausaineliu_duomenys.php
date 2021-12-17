<?php

if(!isset($_COOKIE['naudotojas'])) {
    echo 'Sausainėlis pavadinimu "naudotojas" nera sukurtas!';
} else {
    echo 'Sausainėlis "naudotojas" yra sukurtas!<br>';
    echo 'Jo reikšmė yra: ' . $_COOKIE['naudotojas'];
}

