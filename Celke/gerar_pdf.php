<?php

//recebendo os dados do formulário
$dados = filter_input_array( INPUT_POST, FILTER_DEFAULT) ;

var_dump( $dados);

//verificar se o usuario clicou no botao
if(!empty($dados['btn-gerar'])){

}else{
    //se o usuario nao clicou no botao  retorna para o index
    header("Location: index.php ");
}

?>