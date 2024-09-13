<?php
//aqui declarei as notas
$nota1 = 4;
$nota2 = 8;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;

//aqui usamos o echo para mostrar ao aluno as notas que ele tirou
echo "A primeira nota é: $nota1 <br>";
echo "A segunda nota é: $nota2 <br>";
echo "A terceira nota é:$nota3 <br>"; 

//aqui foi calculada a media 

echo "A media do aluno é: $media <br>";

if ($media > 7) {
    echo 'O aluno foi APROVADO';
}else{
    echo 'O aluno foi REPROVADO';
}    


?>