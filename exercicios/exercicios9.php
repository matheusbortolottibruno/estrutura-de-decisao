<?php 

#### ESTRUTURA DE DECISÃO
$usuario = 'admin';
$senha = 123;
 
if($usuario == 'admin' && $senha == 321){
    echo "Acesso liberado";
}else{
    echo "Usuário ou senha inválido";
}
 
echo "<br>";
#### ESTRUTURA DE REPETIÇÃO & ARRAY
 
$produtos = ['👟','👠','🎮','🌭']; # Array
echo $produtos[0];
echo $produtos[3];
echo count($produtos);
echo "<br>";
$i = 0;
while( $i < 4){
    echo $produtos[$i];
    $i++; // $i = $i + 1
}
?>