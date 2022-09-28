<?php 

include_once __DIR__ . '/Prodotti.php';


class Giochi extends Prodotti
{
  public $materiale;
  public $tipo;
  public function __construct($materiale, $tipo, $marca, $nome, $prezzo)
  {
    $this->materiale = $materiale;
    $this->tipo = $tipo;
    parent::__construct($marca,$nome,$prezzo);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->marca = $marca;
  }

}