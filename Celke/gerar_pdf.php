<?php

// reference the Dompdf namespace
use Dompdf\Dompdf;


// carregar o composer 
require 'vendor/autoload.php';



//recebendo os dados do formulário
$dados = filter_input_array( INPUT_POST, FILTER_DEFAULT) ;

var_dump( $dados);



$conteudo ='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>';


//verificar se o usuario clicou no botao
if(!empty($dados['btn-gerar'])){

    $conteudo .= "<h1>Ola Isabel Boavetura</h1> ";

    $conteudo .='
    
</body>
</html>
';


   // echo $conteudo ;

    // instanciar e usar a classe dompdf
    $dompdf = new Dompdf();

    // (Opção) Tamanho do papel e orientacao 
    //landscape
    $dompdf->setPaper('A4', 'portrait');


    



    $dompdf->loadHtml( $conteudo);







    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

}else{
    //se o usuario nao clicou no botao  retorna para o index
    header("Location: index.php ");
}




?>