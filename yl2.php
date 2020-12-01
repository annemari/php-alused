<?php
// ülesanne 2 Anne-Mari Eensaar 01/12/2020
$x = 7;
$y = 13;

echo $x. "+" .$y. "=" .($x + $y)."<br>";
echo $x. "-" .$y. "=" .($x - $y)."<br>";
echo $x. "*" .$y. "=" .($x * $y)."<br>";
echo $x. "/" .$y. "=" .($x / $y)."<br>";
echo $x. "%" .$y. "=" .($x % $y)."<br>";

$mm = 1307;
$cm = $mm / 10;
$m = $mm / 1000;

$vormintatud_cm = sprintf('Sentimeetrites: %0.2f', $cm);
$vormintatud_m = sprintf('Meetrites: %0.2f', $m);

echo $vormintatud_cm . "<br>";
echo $vormintatud_m . "<br>";

$a = 7;
$b = 13;

$pindala = $a * $b / 2;
$ymbermoot = $a + $b + sqrt(($a * $a) + ($b * $b));

$vormintatud_pindala = sprintf('%d', $pindala);
$vormintatud_ymbermoot = sprintf('%d', $ymbermoot);

echo "Täisnurkse kolmnurga, mille külg a on " .$a. " ja külg b on " .$b. ", pindala on " .$vormintatud_pindala. " ja ümbermõõt ".$vormintatud_ymbermoot;