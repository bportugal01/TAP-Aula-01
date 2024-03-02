
<?php
// include_once 'carro.php';
// include_once 'carroHibrido.php';

// autoload do composer para carregar as classes
require 'vendor/autoload.php';

// Importa as classes
use App\Carro;
use App\hibrido;

// Cria um objeto do tipo carro
$carroHibrido = new hibrido( "Fusion");
$carroHibrido->setCor("Preto");
$carroHibrido->setTipo("Sedan");
$carroHibrido->setAno("2021");
echo $carroHibrido -> exibirInformacoes();

?>