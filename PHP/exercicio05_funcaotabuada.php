<?php
$num = 3;
echo "Tabuada do $num <br>";
function tabuada($a, $b){
    return $a * $b;
}
for ($i = 1; $i <=10; $i++){
    $resultado = tabuada ($i, $num);
    echo "$num X $i = $resultado <br>";
}
?>