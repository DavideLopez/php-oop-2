<?php 

require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Position.php';



class Food extends Prodotti
{
  
  use Position;


  public $ingredienti;
  public $tagliaCane;
  public function __construct($ingredienti, $tagliaCane, $nome, $marca, $prezzo, $peso)
  {
    $this->ingredienti = $ingredienti;
    $this->tagliaCane = $tagliaCane; 
    parent::__construct($marca, $nome, $prezzo, $peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}