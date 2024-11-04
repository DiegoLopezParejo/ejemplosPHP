<?php
    $nota = 7;
    switch ($nota) {
        case $nota >= 0 && $nota < 5:
            echo "La nota $nota es suspenso";
            break;
        case $nota >= 5 && $nota < 6:
            echo "La nota $nota es suficiente";
            break;
        case $nota >= 6 && $nota < 7:
            echo "la nota $nota es bien";
            break;
        case $nota >= 7 && $nota < 9:
            echo "La nota $nota es notable";
            break;
        case $nota >= 9 && $nota <= 10:
            echo "la nota $nota es sobresaliente";
            break;
        default:
            echo "La nota no es valida";
    }
?>