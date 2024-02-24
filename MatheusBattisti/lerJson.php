<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <h2>Lista de Clientes</h2>
  
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Endereço</th>
      </tr>
    </thead>
    <tbody id="clientesTableBody">
      <!-- Os dados serão inseridos aqui via JavaScript -->
    </tbody>
  </table>

  <script>
    // Supondo que você tenha o JSON armazenado em um arquivo chamado clientes.json
    fetch('json/cliente.json')
      .then(response => response.json())
      .then(data => {
        const tableBody = document.getElementById('clientesTableBody');

        console.log( data.clientId ) ; 

        console.log( data.cadastro  ) ; 
        console.log( data.nome ) ; 
        console.log( data.idade  ) ; 


        data.clientes.forEach(cliente => {
          const row = tableBody.insertRow();
          const cellNome = row.insertCell(0);
          const cellIdade = row.insertCell(1);
          const cellEndereco = row.insertCell(2);

          cellNome.textContent = cliente.nome;
          cellIdade.textContent = cliente.idade;
          cellEndereco.textContent = cliente.endereco;
        });
      })
      .catch(error => console.error('Erro ao carregar o JSON:', error));


      // Supondo que você tenha o JSON armazenado em um arquivo chamado clientes.json
    fetch('json/cliente_2.json')
      .then(response => response.json())
      .then(data => {
        const tableBody = document.getElementById('clientesTableBody');

        data.clientes.forEach(cliente => {
          const row = tableBody.insertRow();
          const cellNome = row.insertCell(0);
          const cellIdade = row.insertCell(1);
          const cellEndereco = row.insertCell(2);

          cellNome.textContent = cliente.nome;
          cellIdade.textContent = cliente.idade;
          cellEndereco.textContent = cliente.endereco;
        });
      })
      .catch(error => console.error('Erro ao carregar o JSON:', error));
  </script>

</body>
</html>
