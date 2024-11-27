<?php 

echo "\nOriginale\n";

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}


echo "\nCon Arrow Function\n";

$a = array(3, 2, 5, 6, 1);

/* Se $a == $b, restituisce 0.
 Se $a < $b, restituisce -1.
Altrimenti, restituisce 1.*/

usort($a, fn($a, $b) => $a == $b ? 0 : ($a < $b ? -1 : 1));

// valori ordinati
foreach ($a as $key => $value) {
    echo "$key: $value\n";
}


echo "\nCon Spaceship\n";
/* Con Spaceship */

/* (<=>) restituisce
    -1 se $a < $b
     0 se $a == $b
     1 se $a > $b
*/

function cmp1($a, $b)
{
    return $a <=> $b;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp1");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}

echo "\nCon Spaceship e arrow function\n";

$a = array(3, 2, 5, 6, 1);

// confronto
usort($a, fn($a, $b) => $a <=> $b);

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}