<?php
function get_shortest($texte) {
    $stock = $texte[0];
    foreach ($texte as $phrase) {
        if (strlen($phrase) < strlen($stock)) {
            $stock = $phrase;
        }
    }
    return $stock;
}