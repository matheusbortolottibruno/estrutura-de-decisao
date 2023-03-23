<?php 

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos,
 se for mostrar a mensagem "pode dirigir" senão não mostrar nada  */
$idade = 20;
if($idade >= 18){
    echo "Pode dirigir";
}




/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, 
se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade"  */
$idade = 15;
if($idade >= 18){​​
    echo "Pode dirigir";
}​​else{​​
    echo "Menor de idade";
}​​




/*PROBLEMA: verificar se a idade da pessoa
é maior ou igual de 18 anos,se for
mostrar a mensagem "pode dirigir"
senão verificar se a idade é maior 
ou igual á 90 anos, se "ja passou de,
tempo, nao pode mais dirigir",senao
mostrar "menor de idade"

*/

$idade = 15;
if ($idade >=90){
    echo "ja passou do tempo, nao pode mais dirigir";

}else if ($idade >=18){
    echo "pode dirigir"
}else{
    echo"menor de idade";
}


/*PROBLEMA: verificar se a idade da pessoa
é maior ou igual de 18 anos,se for
mostrar a mensagem "pode dirigir" senao
mostrar " menor de idade" e a quantidade de anos 
que falta para a pessoa ser mair de 
idade

*/

$idade = 10;
if($idade >=18){
    echo "pode dirigir";
}else{
    $diferenxa = 18 - $idade;
    echo "menor de idade , volte em $diferente anos"

}

###ESTRUTURA DE REPETIÇÃO

### RAY
?>