<?php

$regiao = $_GET['regiao'];
{
if($regiao = Sul){
    $pontoEstado = 6;
}
elseif($regiao = Sudeste){
    $pontoEstado = 9;
}
elseif($regiao = Centro-Oeste){
    $pontoEstado = 7;
}
elseif($regiao = Nordeste){
    $pontoEstado = 8;
}
else($regiao = Norte){
    $pontoEstado = 5;}

}

{
$data = new DateTime($data_nascimento);
$idade = $data->diff( new DateTime( date('Y-m-d') ) );
echo $idade->format( '%Y anos' );

if ($idade => 100 && $idade < 18){
    $pontoidade = 5;
}
elseif($idade => 40 && $idade <= 99){
    $pontoidade = 3;
    
elseif($idade => 18 && $idade <= 39){
    $pontoidade = 0;


$pontuaçao = ($pontoEstado - $pontoidade)

{
include_once('config.php');

        $pontuacao = $_POST['pontuacao'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(pontuacao) 
        VALUES('$pontuacao,)");
}
    ?>
