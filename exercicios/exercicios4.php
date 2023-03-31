<?php 


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
    $diferenca = 18 - $idade;
    echo "menor de idade , volte em $diferenca anos";

}
?>