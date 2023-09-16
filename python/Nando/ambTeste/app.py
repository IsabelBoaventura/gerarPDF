from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import A4

def mm2p( milimetros):
    return milimetros / 0.352777

nomes = ['Isabel', 'Uchoa', 'Ingrid', 'Aldenir', 'Gabriel', 'Victor', 'Vini']

arq = canvas.Canvas("./arq_python.pdf", pagesize=A4)

eixoX = mm2p(20)
eixoY = mm2p(270)
print(eixoX)
print(eixoY)

arq.drawString( eixoX ,  eixoY , 'INICIO ')
margSup = 20
linha = 18
# pontoInicialX = eixoX-margSup
eixoY -= linha
arq.drawString( eixoX ,  eixoY , 'Teste ')
print(eixoX)
print(eixoY)
eixoY -= linha


arq.drawString( eixoX ,  eixoY , 'Segunda Linha  ')

eixoY -= linha
arq.drawString( eixoX ,  eixoY , 'Começa a apresentar os nomes:  ')


eixoY -= linha
for nome in nomes:
    arq.drawString( eixoX ,  eixoY , nome )
    eixoY -= linha

arq.line( eixoX, eixoY, (eixoX+490), eixoY)
eixoY -= linha
largura = 350
altura=250
arq.drawImage( ".\Include\img\sol_mar.jpg", eixoX+70, eixoY-altura, width=largura, height=altura)
eixoY -= linha+altura
arq.line( eixoX, eixoY, (eixoX+490), eixoY)


arq.save()