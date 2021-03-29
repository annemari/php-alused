<?php

//Ülesanne 8 Anne-Mari Eensaad 24/03/2021

date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time())."<br>";



$sunniaasta = 1992;
echo 'Kasutaja vanus praegusel aastal: '.(date('Y') - $sunniaasta)."<br>";



$date1 = new DateTime('2020-12-08');
$date2 = new DateTime('2021-06-06');
$paevad  = $date2->diff($date1)->format('%a');
echo "Kooli lõpuni on ".$paevad." päeva"."<br>";



$tana = new DateTime();
$kevad = new DateTime('March 20');
$suvi = new DateTime('June 20');
$sugis = new DateTime('September 22');
$talv = new DateTime('December 21');

switch(true) {
    case $tana >= $kevad && $tana < $suvi:
        echo 'kevad';
        break;

    case $tana >= $suvi && $tana < $sugis:
        echo 'suvi';
        break;

    case $tana >= $sugis && $tana < $talv:
        echo 'sugis';
        break;

    default:
        echo 'talv';
}