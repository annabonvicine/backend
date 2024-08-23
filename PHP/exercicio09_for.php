<?php
$raiz = 0;
$decimal = 0; //essa variavel foi definida para fazer o decimal de duas casas
for ($i = 0; $i <=50; $i++){ //aqui foi basicamnte falado que é do numero 0 ate o 50
    $raiz = sqrt($i); //aqui é a função de raiz quadrada
    $decimal = round($raiz, 2); //e aqui a função pro decimal
    echo "A raizes de $i é: $decimal <br>"; /*e aqui é pra quando aparecer no site, ficar asim: 
                                               "A raizes de 0 é: 0
                                                A raizes de 1 é: 1
                                                A raizes de 2 é: 1.41
                                                A raizes de 3 é: 1.73"*/
}
?>