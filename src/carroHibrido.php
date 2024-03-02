<?php
// namespace é usado para organizar as classes em grupos
namespace App;
// Cria uma classe que herda de Carro
class hibrido extends Carro
{
    public function __construct($modelo) {
        $this->modelo = $modelo;
   
    }
}
