<?php 
// Declaração de variáveis
$nome = "rodrigo";
$idade = "90"; 
$idade2 = 90; 
$lista = ['banana', 'uva', 'maça', 'edem']; 

// Exibe o valor das variáveis $nome, $idade e $lista
echo $nome.'<br>'; 
echo $idade.'<br>';
echo $lista; 
echo'<br>';

// Exibe informações sobre a variável $nome, $idade e $lista incluindo o tipo e o valor
var_dump ($nome); 
echo'<br>';
var_dump($idade); 
echo'<br>';
var_dump($lista); 


if($idade == $idade2){ // Verifica se o valor da variável $idade é igual ao valor da variável $idade2
    echo '<br>';
    echo "Sim"; // Se forem iguais, exibe "Sim"
}else{
    echo '<br> Dentro da porra do Else'; // Se não forem iguais, exibe "Dentro da porra do Else"
    echo '<br>';
    var_dump($idade); // Exibe informações sobre a variável $idade
    echo'<br>';
    var_dump($idade2); // Exibe informações sobre a variável $idade2
}
?>
