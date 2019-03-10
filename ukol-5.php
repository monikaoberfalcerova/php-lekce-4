<?php
function minimum($a, $b, $kontrola = false) {
    if ($kontrola && (!is_numeric($a) || !is_numeric($b))) {
        return false;
    }
    if ($a < $b) {
        return $a;
    } else {
        return $b;
    }
}
//$minimum = minimum(56, 12.3);
$minimum = minimum(56, 'xy', true);
if ($minimum === false) {
    echo 'Chyba';
} else {
    echo $minimum;
}