<?php

    $nome = 'Bruna Dinora Boaventura Machado';
    $telefone= '(55) 9 9686-5845';
    $email = 'boaventurabruna001@gmail.com';
    $endereco_bruna = 'Alegrete-RS';
    $empresa = 'Mercado Caigoaté';
    $cidade ='Alegrete/RS';
    $endereco_exp1 = 'Endereço da Empresa 1';
    $empresa_exp1 = 'Mercado Caigoaté';
    $end_trabalho_completo1 = 'Rua Fidêncio Caiboaté, 202. CEP.: 97543-270 - Progresso - Alegrete/RS';
    $fantasia = 'Frigorífico Marfrig';
    $razao='MFB Marfrig Frigorificos Brasil S.A';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruna - Curriculo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  

    <script src="js/bruna.js" defer></script>
</head>
<body>

    <div class="d-grid gap-2 col-6 mx-auto">    
            <button id="generate-pdf" class="btn btn-lg btn-success" >Gerar PDF</button>
        </div>


    <div id="content">
        <div id="titulo" class="text-center">
            <h1><?php echo $nome;?></h1>
            <hr>
        </div>
       
        <!-- row d-flex justify-content-center
         col-12 d-flex  justify-content-center  -->
        <div id="informacoes" class="text-center">
            <p><?php echo $endereco_bruna ; ?></p>
            <p><?php echo $telefone ; ?></p>
            <p><?php echo $email ; ?></p>
        </div>

        <h2>Resumo</h2>
        <p>Operador de Caixa com mais de 10 anos de experiência, apta a trabalhar com equipe e a solucionar problemas diversos. Hábil no atendimento ao cliente, processamento de pagamentos e controle financeiro. Disposta a aprender e assumir novas funções</p>
        
        <h2>Habilidades e competência</h2>
        <ul>
            <li>Agilidade e eficiência no atendimento ao cliente;</li>
            <li>Habilidade com o sistema do controle de caixa;</li>
            <li>Facilidades com números e cálculo de troco;</li>
            <li>Simpatia no trato com equipes e clientes;</li>
        </ul>

        <h2>Experiência Profissional</h2>
        <h4><b>Auxiliar de Escritório em geral </b> <?php echo   $empresa_exp1. '-' .$cidade ='Alegrete/RS'; ?> </h4>
        <h5>05/12/2018 - Atual</h5>
        <ul>
            <li>Recebimento e conferência de mercadorias;</li>
            <li>Escrituração de notas fiscais;</li>
            <li>Verificação de valores e quantidades em estoque;</li>
            <li>Verificação de contas a receber e contas a pagar;</li>
        </ul>
        <!-- <hr> -->

        <H4><b>Vendedor em Comércio Atacadista </b> <?php echo   $empresa_exp1. '-' .$cidade ='Alegrete/RS'; ?> </h4>
        <h5>23/09/2014 - 01/06/2018</h5>
        <ul>
            <li>Responsável pelo atendimento ao cliente, registrando as compras e recebendo os pagamentos com educação, gentileza e presteza;</li>
            <li>Empacotamento de mercadorias de forma cuidadosa  e eficiente a fim de minimizar danos.</li>
            <li>Realização de atendimento ao cliente em caso de dúvidas e reclamações sobre os produtos da loja, repassando as informações para a gerência.</li>
            <li>Embrulho de pacotes para presente, quando solicitado, valorizando o atendimento ao cliente.</li>
        </ul>
        
       
        <h4><b>Menor Aprendiz</b> <?php echo   $fantasia. '-' .$cidade ='Alegrete/RS'; ?> </h4>
        <h5>19/02/2013 - 01/10/2023</h5>
        <ul>
            <!-- <li>;</li>
             <li>.</li>
            <li>a.</li>
            <li>.</li> -->
        </ul>
        <hr>

       

       

        <h2>Formação Acadêmica</h2>
        <p>Escola Emílio Zuneda - Segundo grau completo. </p>

        <h2>Informações Adicionais</h2>
        <p>Quais informações adicionar aqui </p>


        <?php 
            // $j=1;
            // echo '<p>';
            // for( $i=1; $i<1000; $i++){
            //     echo $nome.' ';
            //     if( $i%3 == 0){
            //         echo ' '.$j.'<br> ';
            //         $j++;

            //     }

            // }
            // echo '</p>';
        ?>
       
    </div>
    
    
</body>
</html>