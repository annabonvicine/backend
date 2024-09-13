<?php

$compras = 500;
$cliente_vip = 'sim';

//aqui foi feito a verificação do cliente 
if ($compras > 500  or $cliente_vip == 'sim') {
    echo "Cleente com desconto aplicado ";
}

// e aqui se nao tivesse as compras a cima de 500 ou ser  for vip
else {
    echo "Cleente sem desconto";
}

?>