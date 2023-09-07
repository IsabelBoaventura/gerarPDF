<?php

//para ver os erros 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// carregar o composer 
require 'vendor/autoload.php';



// reference the Dompdf namespace
use Dompdf\Dompdf;


use Dompdf\Options;






//recebendo os dados do formulário
$dados = filter_input_array( INPUT_POST, FILTER_DEFAULT) ;

//var_dump( $dados);

//Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur modi consequuntur ipsum, dolores rerum neque ipsam nemo nisi voluptatem qui alias, provident exercitationem sed hic culpa aspernatur cupiditate, earum mollitia.



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
    $conteudo .= "<p><b>Nome: </b>".$dados['nome']."</p> ";
    $conteudo .= "<p><b>E-mail: </b>".$dados['email']."</p> ";
    $conteudo .= "<p><b>Descrição: </b>".$dados['descricao']."</p> ";

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


    



    //
    $dompdf->loadHtml( $conteudo);
    //$dompdf->loadHtml('ola mundo ');




    $dompdf->getOptions()->set('isPhpEnabled', true);


    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

}else{
    //se o usuario nao clicou no botao  retorna para o index
    header("Location: index.php ");
}




?>