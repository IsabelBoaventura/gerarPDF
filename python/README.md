

# PyCodeBr


## Criando o ambiente virtual

	python -m venv venv
	
	source venv/bin/activate
	(Nao funcionou)
	

	
Dentro do arquivo, criou a pasta venv

## Bibliotecas

* python v3.10.2
* pip v21.2.4
* reportlab v4.0.4

## pastas

PyCodeBr
	-> venv
		->Include
		->Lib
		->Scripts
		->pyvenv.cfg
		->main.py
		
## Executando 
Para executar o python vá até a pasta venv (pelo terminal)

	cd venv
	
	python main.py
	
	
		
## Construindo

Dentro do arquivo principal ( venv ) criar o arquivo main.py ;

Instalar a biblioteca reportlab:

	pip install reportlab 
	
	
ReportLab começa pelo fim da página, canto inferior esquerdo, e começa com os pontos 0 e 0 .

 


Execute o python(pelo terminal):
	
	python main.py
	
Com isto o sistema irá gerar o arquivo pdf. O primeiro exemplo.

Gerando na pasta do sistema ( venv) o arquivo em pdf gerado. 


Unidade de medida, sendo medida em pontos. Cada ponto equivale a aproximadamente 1,72avos de polegadas. 


Informando o tamanho que desejamos para o arquivo. 

Para descobrir o comprimento e a largura da folha A4, mandamos imprimir ela na tela: 

	print(A4)
	
E rodamos o python novamente:

	python main.py
	
No terminal teremos a resposta:
(595.275590... , 841.889763....)

Portanto a folha A4 tem 595 pontos de largura e 841 pontos de comprimento.

Agora podemos definir em quais pontos iremos escrever.
Deixamos para teste: 100,780;

Mudando a fonte
Os nomes das fontes de teste, estou pegando do arquivo  `_fontdata.py` que esta localizado em `C:\Python310\Lib\site-packages\reportlab\pdfbase` ;

Quando for para gerar um arquivo de verdade, não pode ser neste modo de teste, para o numero da linha e nem para o tamanho da letra.

Quando há textos grandes ainda não há tratamento de quebra de linha em nosso código. 

Python tem funções nativas para desenhos, como circulos, retangulos  ...parece o Canvas do javascript.


## :tada: Finalizado

Gerou o PDF, mas ficou com mais duvidas do que como concluido: quebra de linha, outra forma de contar as linhas. 

Buscar mais informações



# JOLU

Caminho: https://jobu.com.br/2021/06/23/como-criar-arquivos-pdf-com-python/


Para começar a trabalhar com o python usamos o comando de criação da pasta principal (jolu):

	python -m venv jolu
	
	pip install reportlab ( dentro da pasta jolu)
	
	
	
	
	
# Acervo Lima

https://acervolima.com/criacao-de-documentos-pdf-com-python/

Acervo Lima trouxe mais elementos para estudos, como a cor do texto, acrescentar a imagem,  centralizar titulo. 

o Texto e a quebra de linha conforme esta sendo realizado nao me satisfaz. 







