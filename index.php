<?php

require_once __DIR__ . '/Products/Prodotti.php';
require_once __DIR__ . '/Products/Food.php';

$crocchette = new AnimalFood('crocchette di manzo', 'crocchette di pollo', 'crocchette vegetali');
$carne = new AnimalFood2('carne di manzo', 'carne di vitello', 'pesce',);


$catalogo = [ $crocchette, $carne ];

$carrello = [ $crocchette, $carne ];

// calcolo del costo nel carrello
$prezzoOggetti = 0;
$prezzoSpedizione = 15;

echo "<h1>Il tuo Carrello</h1>";
