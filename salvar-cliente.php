
<?php

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$rua = $_POST["rua"] ?? "";
$numero = $_POST["numero"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$complemento = $_POST["complemento"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";
$datadenacimento = $_POST["datadenacimento"] ?? "";
$cpf = $_POST["cpf"] ?? "";
$rg = $_POST["rg"] ?? "";
$whatsapp = $_POST["whatsapp"] ?? "";
$rg = $_POST["rg"] ?? "";
$bebida = $_POST["bebida"] ?? "";

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
echo "rua: $rua <br>";
echo "numero: $numero <br>";
echo "bairro: $bairro <br>";
echo "complemento: $complemento <br>";
echo "cidade: $cidade <br>";
echo "estado: $estado <br>";
echo "datadenacimento: $datadenacimento <br>";
echo "cpf: $cpf <br>";
echo "rg: $rg <br>";
echo "whatsapp: $whatsapp <br>";
echo "bebida: $bebida <br>";

?>
