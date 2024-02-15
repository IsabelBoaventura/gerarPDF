<?php 

require 'conexao.php';


//busca das cidades 
$sql_all = 'SELECT * FROM cidades WHERE id_uf = 42';
$res_all = $conexao->prepare( $sql_all );
$res_all->execute();


$total_registros = $res_all->rowCount();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv='refresh' content='5'> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <script src="scripts.js" defer></script>

   <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .n1 {
            height: 10%;
        }
        .n2 {
            height: 80%;
        }
        [class^="col-"] {
            border: 1px solid red;
        }
        img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
   </style>
</head>
<body>
    <div class="container">
       
        <div class="d-grid gap-2 col-6 mx-auto">
           
            <button id="generate-pdf" class="btn btn-lg btn-success" >Gerar PDF</button>
        </div>
     
        




        <div id="conteudo">

                <h1>Bruna Dinora Boaventura Machado</h1>


                <pre>
                    <b>Contato</b>
                        E-mail:
                        Telefone:
                        Endereço:
                    <b>Links Profisionais</b>
                        site pessoal: portifólio
                        Repositório: github (deixar apenas os principais publicos, coemtnar os demais)
                        LinkedIn

                    <b>Perfil</b>
                    testo tragbalhado , pensado para a vaga , sendo protagonista da ação

                    <b>Exemplo: </b>
                        Sou um desenvolvedor apaixonado pelo o que eu faço ... Por isto estou sempre querendo aprender algo novo que me ajude a ser um desenvolvedor cada vez melhor.

                        Estou com 2 anos de experiência e já atuei tanto no back-end como no front-end,  utilizando PHP, JQuery, HTML/CSS3, SQL server, MySql e atualmente estou estudando React e Sass.
                    <b>experiência Profissional</b>
                        Nome da empresa
                        Periodo
                        cargo
                        área de atuação
                        exemplo:
                            Trabalho na manutenção e implementação de projetos internos utilizando PHP, HTML/CSS3 e Sql server. 
                    <b>Formação</b>

                    <b>Cursos Extracurriculares </b>
                        Curso para me aperfeiçoar que eu tenha realizado.

                    <b>Projeto em Destaque</b>
                        Algum projeto realizado e que tenha a ver com esta vaga;
                    <b>Tecnologias</b>
                        As tecnologias que ja tem experiencia e as que esta estudado; 



                </pre>

    </div>


   
</body>
</html>