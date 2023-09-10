from reportlab.pdfgen import canvas
from reportlab.lib.pagesizes import A4




pdf= canvas.Canvas('./exemplo.pdf', pagesize=A4 )
print(A4)
pdf.setFont('Helvetica-Oblique', 14)
pdf.drawString(100,780,' Primeira Impressao em pdf com Python')

pdf.setFont('Times-Roman', 22)
pdf.drawString(100,750,' Isabel Boaventura')

pdf.setFont('Courier', 26)
pdf.drawString(100,720,'Teste nova Linha')

pdf.setFont('Times-Bold', 24)
pdf.drawString(100,700,'Uchoa')

pdf.setFont('Courier-Oblique', 18)
pdf.drawString(100,680,'Nova linha ')

pdf.setFont('Times-Roman', 16)
pdf.drawString(100,680,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt deserunt libero dicta vel? Maiores, eaque. Molestias facere expedita maxime, atque quidem debitis ut similique unde quae doloribus quia maiores? ')

pdf.circle( 100,100, 20)

pdf.rect(100, 300, 300 , 130)


pdf.save()