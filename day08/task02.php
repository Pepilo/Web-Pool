<?php
function dog_bark($woof_nb) {
    $clebard = "";
    for ($i = 0; $i < $woof_nb; $i++) {
        $clebard .= "woof ";
    }
    $clebard = substr($clebard, 0, -1);
    $clebard .= "\n";
    echo($clebard);
}
?>