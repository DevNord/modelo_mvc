<?php
class Curso {
    public $nome;
    public $data;

    public $cargaHoraria;
    public function __construct($nome, $data, $cargaHoraria) {
      $this->nome = $nome;
      $this->data = $data;
      $this->cargaHoraria = $cargaHoraria;
    }
  }
  
  $php = new Curso("PHP 5", "01/03/2024", "40 horas ");
  
  foreach ($php as $x => $y) {
    echo "$x: $y <br>";
  }

?>