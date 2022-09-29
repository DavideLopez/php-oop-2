<?php 

require_once __DIR__ . '/Prodotti.php';
require_once __DIR__ . '/Position.php';



class Food extends Prodotti
{
  
  use Position;

  public $scadenzacibo;
  public $ingredienti;
  public $tagliaCane;
  public function __construct($ingredienti, $scadenzacibo, $tagliaCane, $nome, $marca, $prezzo, $peso)
  {
    $this->setScadenza($scadenzacibo);
    $this->ingredienti = $ingredienti;
    $this->tagliaCane = $tagliaCane; 
    parent::__construct($marca, $nome, $prezzo, $peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }
  
  public function setScadenza($scadenzacibo) {
    var_dump($scadenzacibo);
    try
     { 
      if (gettype($scadenzacibo)!= "scaduto") {
        throw new Exception($scadenzacibo);
      }
    } catch (Exception $e) {
      echo ' attenzione! il tuo prodotto è scaduto a ', $e->getMessage();
    }
  }


}

