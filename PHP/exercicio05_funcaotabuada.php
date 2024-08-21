<?php
//aqui eu declarei o numero da tabuada que eu quero
$num = 3;
echo "Tabuada do $num <br>";
//criei a função que é um numero vezes o outro
function tabuada($a, $b){
    return $a * $b;
}
//esse for serve pra dizer que é a tabuada do 1 ao 10 
for ($i = 1; $i <=10; $i++){
    //aqui ele vai falar que a tabuada é do 1 ao 10, e que é vezes o numero que eu escolhi
    $resultado = tabuada ($i, $num);
    //e aqui vai imprimir a tabuada
    echo "$num X $i = $resultado <br>";
    /* a saida sera:Tabuada do 3
            3 X 1 = 3
            3 X 2 = 6
            3 X 3 = 9
            3 X 4 = 12
            3 X 5 = 15
            3 X 6 = 18
            3 X 7 = 21
            3 X 8 = 24
            3 X 9 = 27
            3 X 10 = 30*/
}
?>