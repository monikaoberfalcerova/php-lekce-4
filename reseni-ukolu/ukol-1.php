<?php

echo 'Historie přístupů:<br>';

// 1. vypsání historie přístupů
if (file_exists('pristupy.txt')) {
    $handle = fopen('pristupy.txt', 'r');

    if ($handle === false) {
        echo 'Chyba při otevírání souboru!';
    } else {
        echo fread($handle, 1000);
        fclose($handle);
    }
} else {
    echo 'Soubor pristupy.txt neexistuje';
}

// 2. přidání data aktuálního přístupu na konec souboru
$handle = fopen('pristupy.txt', 'a');
fwrite($handle, date('Y-m-d H:i:s') . '<br>');
fclose($handle);
