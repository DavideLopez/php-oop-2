<?php 

include_once __DIR__ . '/Prodotti.php';


class Giochi extends Prodotti
{
  public $materiale;
  public $tipo;
  public function __construct($materiale, $tipo, $marca, $nome, $prezzo, $peso)
  {
    $this->materiale = $materiale;
    $this->tipo = $tipo;
    parent::__construct($marca,$nome,$prezzo,$peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}