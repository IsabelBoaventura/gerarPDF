<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv='refresh' content='50'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar PDF com PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <h1>Gerar PDF com PHP </h1>
        <form method="Post" action="gerar_pdf.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp">
                <div id="nomeHelp" class="form-text">Adicione o nome a ser apresentado.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="nomeHelp">
                <div id="emailHelp" class="form-text">Adicione o e-mail a ser apresentado.</div>
            </div>
            <label for="descricao" class="form-label">Descrição </label>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Adicione a descrição" id="descricao" name="descricao"></textarea>    
            </div>          
            <button type="submit" class="btn btn-primary" name="btn-gerar" value="gerar">Gerar PDF</button>
          
        </form>
    </div>
    
</body>
</html>


<?php
   //phpinfo();
?>