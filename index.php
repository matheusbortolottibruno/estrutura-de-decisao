<?php 

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos,
 se for mostrar a mensagem "pode dirigir" senão não mostrar nada  

 $idade = 20;
if($idade >= 18){
    echo "Pode dirigir";
}




/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, 
se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade"  
$idade = 15;
if($idade >= 18){​​
    echo "Pode dirigir";
}​​else{​​
    echo "Menor de idade";
}​​
*/



/*PROBLEMA: verificar se a idade da pessoa
é maior ou igual de 18 anos,se for
mostrar a mensagem "pode dirigir"
senão verificar se a idade é maior 
ou igual á 90 anos, se "ja passou de,
tempo, nao pode mais dirigir",senao
mostrar "menor de idade"



$idade = 15;
if ($idade >=90){
    echo "ja passou do tempo, nao pode mais dirigir";

}else if ($idade >=18){
    echo "pode dirigir"
}else{
    echo"menor de idade";
}
*/

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



/*
PROBLEMA: crie um código que verifique
 a cor informada pelo usuário e gere um código
  hexadecimal para formatar a cor do texto.
   As cores permitidas são: azul, vermelho e verde. 
   Caso seja diferente, deixar a letra preta;

 */
$corEscolhida = "azul";
$corHexa = "";
 
switch($corEscolhida){
    case "vermelho":
        $corHexa = "#ff0000";
        break;
    case "azul":
        $corHexa = "#0000ff";
        break;
    case "verde":
        $corHexa = "#00ff00";
        break;
    default:
        $corHexa = "#000000";
        break;
}

 
echo "<h1 style='color:$corHexa'>MATHEUS BB</h1>";


###ESTRUTURA DE REPETIÇÃO



/*
PROBLEMA: exiba os números de 0 à 20

$contador = 0;
while($contador <= 30){
    echo $contador . "<br>";
    // $contador = $contador + 1;
    $contador++;
}  
*/

/*
PROBLEMA: exiba os números de 10 à 0
*/
$contador = 15;
while ($contador >= 0) {
    echo "$contador <br>";
    $contador--;
}


/* PROBLEMA : EXIBA OS NÚMEROS DE A 20*/ 

for ($i = 0 ; $i <= 10; $i++){
    echo "$i <br>";
}


  


### ARRAY


#$fruta01 = '🍓';
#$fruta02 = '🍇';
#$fruta02 = '🥥';

//$frutas = array();
//$frutas[0] = "🍓";
//$frutas[1] = "🍇";
//$frutas[2] = "🥥";

$frutas = ["🍓" , "🍇" , "🥥"];
$frutas[3] = "🍍";
array_push($frutas, "🍒");
echo count($frutas);


echo "<h1>salada de frutas</h1>";
#echo $frutas[1];
#echo $frutas[0];
#echo $frutas[2];


echo "<h1>salada de frutas</h1>";

//$qtd = count($frutas);
//$contador = 0;
//while ($contador < $qtd){
    //echo "$contador";
    //echo "frutas: $frutas[$contador] <br>";
    //$contador++;

    for($i = 0; $i < count($frutas); $i++){
        echo $frutas[$i];
    }


//ESPORTE


    echo "<h1>ESPORTE</h1>";
    $esporte = ["🤾‍♂️" , "⛹️‍♀️" , "🏋️‍♀️" , "🏌️‍♀️" , "🏄‍♂️" , "🏊🏼‍♀️"];
$esporte[6] = "🚴🏼‍♀️";
    //array_push($esporte, "🚴🏼‍♀️");

    $qtd = count($esporte);
    $contador = 0;
    while ($contador < $qtd){
        echo "$contador";
        echo "esporte: $esporte[$contador] <br>";
        $contador++;
    }



###OPERAÇÃO ENTRE ARQUIVOS
?>