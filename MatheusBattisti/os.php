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
  
    <script type="text/javascript" src="json/cliente.json"></script>
    <!-- <script src="js/bruna.js" defer></script> -->
</head>
<body>


    <h1>Ler e obter dados um arquivo JSON</h1>
    <h2>Uso do XMLHttpRequest para obter o conteúdo de um arquivo - Requisição AJAX.</h2>
    <p>O conteúdo está escrito no formato JSON, e pode facilmente ser convertido em um objeto JavaScript.</p>
    <p>Para converter o conteúdo JSON em um objeto JavaScript utilize o método JSON.parse().</p>
    <hr/>

    <p id="demo"></p>
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


        <script>
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var cliente = JSON.parse(this.responseText);   
                    
                    console.log( cliente ); 
                    document.getElementById("demo").innerHTML = `
                        <h3>Dados do Cliente</h3>
                        <p>Cadastro: ${new Date(cliente.cadastro)}</p>    
                        <p>Nome: ${cliente.nome}</p> 
                        <p>Idade: ${cliente['idade']} anos</p>
                        <p>Cidade: ${cliente.cidade} - ${cliente.estado}</p>
                        <h4>Pets</h4>    
                        <table>
                            <tr>
                                <th>Animal</th>
                                <th>Nome do Pet</th>
                            </tr>
                            <tr>
                                <td>${cliente.pets[0]['animal']}</td>
                                <td>${cliente.pets[0]['nome']}</td>
                            </tr> 
                            <tr>
                                <td>${cliente.pets[1].animal}</td>
                                <td>${cliente.pets[1].nome}</td>
                            </tr>
                            <tr>
                                <td>${cliente.pets[2].animal}</td>
                                <td>${cliente.pets[2].nome}</td>
                            </tr>
                        </table>
                        <br/>    
                        <hr/>   
                     `
                }
            };

            xmlhttp.open("POST", "cliente.json", true);
            xmlhttp.send();
            </script>

<p>Acesse o arquivo JSON <a href="json/cliente.json" target="_blank">cliente.json</a></p>

       
    

    
    
</body>
</html>