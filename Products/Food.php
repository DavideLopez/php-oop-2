<?php 

require_once __DIR__ . '/Prodotti.php';

class AnimalFood extends Prodotti
{
  public $ingredienti;
  
  public function __construct($ingredienti, $nome, $marca, $prezzo, $peso)
  {
    $this->ingredienti = $ingredienti;
    
    parent::__construct($marca,$nome,$prezzo,$peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}