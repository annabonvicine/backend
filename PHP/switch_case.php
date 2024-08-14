<?php

//aqui a gente usou o switch 

//para aparecer no site mude a cor na "função" $corEscolhida = "vermelha".
$corEscolhida = "vermelha";

switch ($corEscolhida){
    case "vermelho":
        echo "Você escolheu a cor vermelha.";
        break;

    case "azul":
        echo "Você escolheu a cor azul.";
        break;
    
    case "verde":
        echo "Você escolheu a cor verde.";
        break;
      
    default:
        echo "Cor não disponível.";
        break;
    }


?>