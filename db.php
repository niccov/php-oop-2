<?php

$type = ["gatto", "cane"];

$pranzetti = new Cibo("croc", "buonissimi", "12$", $type[0], "img", "10 Luglio 2023");
$dormiBene = new Cucce("Dormi Bene", "comodissima", "30$", $type[0], "img", "40x40x20cm");
$pallinas = new Giochi("Corri Forte", "velocissima", "15$", $type[1], "img", "superficie ondulata");

$products = [
    $pranzetti, 
    $dormiBene,
    $pallinas
];
