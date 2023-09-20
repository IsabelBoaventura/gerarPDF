<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '123456';
$dbname = 'isabel';
$port = 3306;

try{
    //conexao
    $conexao = new PDO("mysql:host=$host;dbname=". $dbname, $user , $pass );
    //   
    echo '<BR>Conexao com o banco de dados  realizada com Sucesso';

}catch( PDOException $err ){
    echo "<br>Erro: Conexao com o banco de dados Não realizada. <br> Erro Gerado: ". $err->getMessage();

}

?>