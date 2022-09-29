<?php 

require_once __DIR__ . '/Products/Prodotti.php';
require_once __DIR__ . '/Products/Giochi.php';
require_once __DIR__ . '/Products/Food.php';


$crocchette1 = new Food('carne di pollo', 'dicembre2021', 'cane taglia grande','Crocchette supertasty','chick&meat',35, 8);
$crocchette2 = new Food('carne di manzo', 'dicembre2021', 'cane taglia piccola','Crocchette monge','RALF',25,3);
$giocattolo1 = new Giochi('gomma','osso','TRIXIE','Osso TRIXIE XL',5,0.2);
$giocattolo2 = new Giochi('stoffa','pupazzo','TRIXIE','Pupazzo TRIXIE bounce',7,0.1);

$catalogo = [$crocchette1, $crocchette2, $giocattolo1, $giocattolo2];

$carrello = [$crocchette1, $giocattolo1, $giocattolo2];

// calcolo del costo 

$prezzoOggetti = 0;
$prezzoSpedizione = 15;
echo "<h1>Il tuo Carrello:</h1>";
for ($i=0; $i < count($carrello) ; $i++) { 
  $el = $carrello[$i];
  $prezzoOggetti = $prezzoOggetti + $el->prezzo;
  echo " {$el->nome} - {$el->prezzo}€ <br>";
};  
 echo " <h2>il prezzo base é di {$prezzoOggetti} € </h2>";
if($prezzoOggetti >= 50){
  $prezzoTotale = $prezzoOggetti;
}else{
  $prezzoTotale = $prezzoOggetti + $prezzoSpedizione;
}
echo "<h3> il prezzo finale é di {$prezzoTotale} €</h3>";
var_dump($catalogo,$carrello,$prezzoOggetti,$prezzoTotale);
