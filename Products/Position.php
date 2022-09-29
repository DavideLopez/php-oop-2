<?php

trait Position {
  public $scaffale;
  public $mensola;


  public function getScaffale() {
    return $this->scaffale;
  }

  public function setScaffale($valore) {
    $this->scaffale = $valore; 
  }

  public function getMensola() {
    return $this->mensola;
  }

  public function setMensola($valore) {
    $this->mensola = $valore; 
  }
  
  
}



 function Somma($a,$b) {
  if($a + $b > 5) {
    throw new Exception('il tuo elemento è maggiore di 5');
    return; 
  } 
  return $a + $b; 
}

 try  {
  Somma(3,3);
 } catch (Exception $e) {
   var_dump($e);
 }
 
  

