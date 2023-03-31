<?php 
$nome  = $_POST["nome"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];



echo "$nome - $cidade - $telefone - $email" ;

$arquivo = fopen("clientes.txt", "a+");

fwrite($arquivo, $nome . "\n" );
fwrite($arquivo,$cidade . "\n" );
fwrite($arquivo,$telefone . "\n" );
fwrite($arquivo,$email . "\n" );

fclose($arquivo);

header("location:index.php");
?>