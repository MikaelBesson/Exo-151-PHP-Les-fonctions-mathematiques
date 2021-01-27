<?php

/**
 * 1. Affichez dans un <p> la valeur absolue de -8
 */
$value = -8;

// TODO Votre code ici.
$result = abs($value);
echo "<p> la valeur absolue de -8 est : $result<br> ";

/**
 * 2. Affichez dans un <p> la valeur de 5.64 arrondit au nombre supérieur.
 */
$value = 5.64;
// TODO Votre code ici.
$result1 = ceil($value);
echo "<p> la valeur arrondit au superieur de 5.64 est : $result1<br> ";


/**
 * 3. Affichez dans un <p> la valeur de 5.34 arrondit au nombre inférieur.
 */
$value = 5.34;
// TODO Votre code ici.
$result2 = floor($value);
echo "<p> la valeur arrondit a l'inferieur de 5.34 est : $result2<br> ";

/**
 * 4. Affichez dans un <p> la valeur maximum du tableau $max, et la valeur minimum du tableau $min.
 */
$max = [5, 10, 12, 8, 7, 6, 54, 39, 76, 63, 84, 2, 21];
$min = [5, 41, 65, 4, 3, 65, 2, 65, 74, 51, 23, 39, 42];
// TODO Votre code ici.
$result3 = max($max);
echo "<p> la valeur max du tableau est : $result3<br> ";
$result4 = min($min);
echo "<p> la valeur min du tableau est : $result4<br><br> ";
/**
 * 5. Affichez dans un <p> la valeur de PI * 2 ( avec une fonction mathématique pour PI ).
 */

// TODO Votre code ici.

    $result5 = pi() * 2;

echo "la valeur de pi * 2 est : ".$result5;


/**
 * 6. Affichez dans un <p> la valeur arrondie de 5.42 avec la fonction round().
 */
$value = 5.42;
// TODO Votre code ici.
$result6 = round($value);
echo "<p> la valeur arrondit de 5.42 est : $result6<br> ";




