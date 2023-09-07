# Celke

Gerando PDF com PHP.

  

## :books: Material

Material usado para este conteudo: 

- VS Code
- PHP 7.4
- dompdf ( https://github.com/dompdf/dompdf )
- composer v2.3.10


## Requerimentos para o DOMPDF

* PHP version 7.1 ou superior
* DOM extension
* MBString extension
* php-font-lib
* php-svg-lib
(Não foi necessário modificar nada em meu php.ini )



## :card_file_box: pastas (caminhos)

- index.php
- gerar_pdf.php 











## :building_construction: Começando

Construir o arquivo index, onde deve constar um HTML, com um 'form' contendo inputs  para 'nome' e 'e-mail' e um textarea para 'descricao'. E o botão de submeter.

Construindo o arquivo que irá receber as informações ( gerar_pdf.php );

Gerando o pacote inicial (terminal):




<p align="center">
  <img src="imagens/erro_objeto.jpg" width="350" title="servidor localizado">
</p> 

Instale a biblioteca dompdf usando o composer

### Instalação da Biblioteca

	composer init
	
	composer require dompdf/dompdf



	
Continuando.. 
Adicione o código HTML com as informações da pagina html e mande gerar o pdf. 

<p align="center">
  <img src="imagens/pdf_celke.jpg" width="350" title="servidor localizado">
</p>


## :tada: Finalizado

No caso do composer, tive de modificar o nome do meu usuário no pc,  estava com espaço. 

Deixei no fonte do código do gera-pdf uma instrução de escrita na tela ( var_dump) o que estava causando erro ( Falha ) no momento de abrir o pdf. 

Depois de eliminado, o sistema imprimiu corretamente.