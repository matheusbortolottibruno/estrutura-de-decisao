<?php 
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

?>