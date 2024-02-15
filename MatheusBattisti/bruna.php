<?php

    $nome = 'Bruna Dinora Boaventura Machado';
    $telefone= '(47) 9 9191 2830';
    $email = 'emsial@email.com.br';

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
        <h1><?php echo $nome;?></h1>
        <hr>
        <div id="informacoes">
            <p>Alegrete/RS</p>
            <p><?php echo $telefone ; ?></p>
            <p><?php echo $email ; ?></p>

        </div>
        informações

        <h2>Resumo</h2>
        <p>Operador de Caixa com mais de 10 anos de experiência, apta a trabalhar com equipe e a solucionar problemas diversos. Hábil no atendimento ao cliente, processamento de pagamentos e controle financeiro. Disposta a aprender e assumir novas funções</p>
        
        <h2>Habilidades e competência</h2>
        <ul>
            <li>Agilidade e eficiência no atendimento ao cliente;</li>
            <li>Habilidade com o sistema do controle de caixa;</li>
            <li>Facilidades com números e cálculo de troco;</li>
            <li>Simpatia no trato com equipes e clientes;</li>
        </ul>
        
        <h2>Experiência Profissiona</h2>
        <p><b>Operador de Caixa</b> empresa - Cidade</p>
        <h4>01/2010 - Atual</h4>
        <ul>
            <li>Responsável pelo atendimento ao cliente, registrando as compras e recebendo os pagamentos com educação, gentileza e presteza;</li>
            <li>Empacotamento de mercadorias de forma cuidadosa  e eficiente a fim de minimizar danos.</li>
            <li>Realização de atendimento ao cliente em caso de dúvidas e reclamações sobre os produtos da loja, repassando as informações para a gerência.</li>
            <li>Embrulho de pacotes para presente, quando solicitado, valorizando o atendimento ao cliente.</li>
        </ul>
        <p>Resumo do que fazia</p>

        <h3>Titulo experiencia 2</h3>
        <h4>duração 2 </h4>
        <p>Resumo do que fazia 2 </p>

        <h2>Formação Acadêmica</h2>
        <h3>Titulo Segundo grau completo</h3>

        <h2>Informações Adicionais</h2>
        <h3>Titulo Segundo grau completo</h3>
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