<?php 
$clientes = ["Renata"  , "Alan" , "Ingrid" , "Sara" , "Kleber"];
$arquivo = fopen("cliente-novo.txt","a");
$i = 0;

while ($i < count($clientes)){
    echo $clientes[$i] . "<br>";
   fwrite($arquivo, $clientes[$i] . "\n");
   $i++;
}
fclose($arquivo);
?>