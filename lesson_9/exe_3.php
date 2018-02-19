<?php

function IsCasiPalindromo($string) {
    $string_length = strlen($string);
    $half_position = $string_length / 2;
    $different_letters = 0;

    for($i=0; $i<$half_position; $i++) {
        if ($string[$i] !== $string[($string_length-1)-$i]) {
            $different_letters++;
        }
    }

    if ($different_letters > 1) {
        return 0;
    }
    return 1;
}

echo IsCasiPalindromo('abccba');
echo IsCasiPalindromo('abccbx');
echo IsCasiPalindromo('abccfg');