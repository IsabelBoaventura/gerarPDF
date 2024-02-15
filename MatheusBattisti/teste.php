<!DOCTYPE html>
<html lang="en">
  
<head>
  
    <!-- html2pdf CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  
    <style>
        .container {
            position: fixed;
            top: 20%;
            left: 20%;
            margin-top: -65px;
            margin-left: -50px;
            border-radius: 7px;
        }
  
        .card {
            box-sizing: content-box;
            width: 600px;
            height: 450px;
            padding: 40px;
            border: 1px solid black;
            font-style: sans-serif;
            background-color: #f0f0f0;
        }
  
        #button {
            background-color: #4caf50;
            border-radius: 5px;
            margin-left: 650px;
            margin-bottom: 5px;
            color: white;
        }
  
        h1 {
            text-align: center;
            color: #24650b;
        }
    </style>
</head>
  
<body>
    <div class="container">
        <button id="button">Generate PDF</button>
        <div class="card" id="makepdf">
       
      
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
                Sou um desenvolvedor apaixonado pelo o que eu faço ... Por isto estou sempre querendo aprender 
                algo novo que me ajude 
                a ser um desenvolvedor cada vez melhor.

                Estou com 2 anos de experiência e já atuei tanto no back-end como no front-end,  utilizando PHP, 
                JQuery, HTML/CSS3, SQL server, MySql e atualmente estou estudando React e Sass.

            <b>Experiência Profissional</b>
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
    </div>


   
</body>
  
<script>
    var button = document.getElementById("button");
    var makepdf = document.getElementById("makepdf");
  
    button.addEventListener("click", function () {
        var mywindow = window.open("", "PRINT", 
                "height=800,width=600");
  
        mywindow.document.write(makepdf.innerHTML);
  
        mywindow.document.close();
        mywindow.focus();
  
        mywindow.print();
        mywindow.close();
  
        return true;
    });
</script>
  
</html>