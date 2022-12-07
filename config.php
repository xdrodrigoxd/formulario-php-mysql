<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'user1234';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//if($conexao->connect_errno)
//{
//    echo "Erro";
//}
//else
//{
//    echo "Conexão efetuada com sucesso";
//}

/* código base para fazer requisição POST para API
$context = stream_context_create(array(
        'http' => array(
            'method' => 'POST',                    
            'header' => "Connection: close\r\n".
                        "Content-type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".strlen($content)."\r\n",
            'content' => $content                               
        )
    ));
    // Realize comunicação com o servidor
    $contents = file_get_contents($servidor, null, $context);            
    $resposta = json_decode($contents);  //Parser da resposta Json
    */




?>

