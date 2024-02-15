<?php 

//require 'conexao.php';


//busca das cidades 
// $sql_all = 'SELECT * FROM cidades WHERE id_uf = 42';
// $res_all = $conexao->prepare( $sql_all );
// $res_all->execute();


// $total_registros = $res_all->rowCount();

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


<<<<<<< HEAD

                </pre>

    </div>


   
=======
            <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>          
   
            <?php            
                // foreach ($conexao->query($sql_all) as $row) {
                //     echo '
                //     <tr>
                //         <td>'. $row['id'].'</td>
                //         <td>'.$row['nome'].'</td>
                //     ';

                //     //busca do nome da Região deste estado
                //     $sqlRegiao = 'SELECT nome FROM estados  WHERE id = "'.$row['id_uf'].'" ';
                //     $resRegiao = $conexao->prepare( $sqlRegiao );
                //     $resRegiao->execute();

                //     $result = $resRegiao->fetchAll(PDO::FETCH_ASSOC);
                //     //echo $result[0]['nome'];

                //     echo '
                //         <td>'.$result[0]['nome'].'</td>
                //     </tr>
                //     ';
                // }
            ?>            
                </tbody>
            </table>


            <div class="texto_grande">
                <div class=" text-center cabecalho">
                    <h1> Lorem Ipsum </h1>
                    <blockquote class="blockquote">
                        <p class="mb-2">
                        "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                        </p>
                        <footer class="blockquote-footer">Algu�m famoso na <cite title="T�tulo da fonte">T�tulo da fonte</cite></footer>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <p>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
                    </blockquote>
                </div>
                <hr>
                <div class="texto">
                    <div class="row">
                        <div class="col">
                            1 of 2
                            <h2>What is Lorem Ipsum? </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            
                        </div>
                        <div class="col">
                            2 of 2
                            <h2>Why do we use it?</h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2> Where does it come from?</h2>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        </div>
                        <div class="col">
                            <h2>Where can I get some?</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> a028186764adf77a83f754e803a50c3f14638de3
</body>
</html>