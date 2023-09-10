# importing modules
from reportlab.pdfgen import canvas
# from reportlab.pdfbase.ttfonts import TTFont
from reportlab.pdfbase import pdfmetrics
from reportlab.lib import colors
from reportlab.lib.pagesizes import A4


# initializing variables with values
fileName = 'sample.pdf'
documentTitle = 'sample'
title = 'Technology'
subTitle = 'The largest thing now!!'
textLines = [
    'Technology makes us aware of',
    'the world around us.',
    'Lorem ipsum dolor sit amet consectetur adipisicing ',
    ' elit. Corporis nesciunt deserunt libero dicta vel? ', 
    ' Maiores, eaque. Molestias facere expedita maxime, ', 
    ' atque quidem debitis ut similique unde quae  ', 
    ' doloribus quia maiores?',
]
image = 'teste.jpg'


# creating a pdf object
pdf = canvas.Canvas(fileName , pagesize=A4 )
 
# setting the title of the document
pdf.setTitle(documentTitle)


# registering a external font in python
# pdfmetrics.registerFont(
#     TTFont('abc', 'SakBunderan.ttf')
# )
 
# creating the title by setting it's font
# and putting it on the canvas
pdf.setFont('Courier', 36)
pdf.drawCentredString(300, 770, title)

# creating the subtitle by setting it's font,
# colour and putting it on the canvas
pdf.setFillColorRGB(0, 0, 255)
pdf.setFont("Courier-Bold", 24)
pdf.drawCentredString(290, 720, subTitle)



# drawing a line
pdf.line(30, 710, 550, 710)
 
# creating a multiline text using
# textline and for loop
text = pdf.beginText(40, 680)
text.setFont("Courier", 18)
text.setFillColor(colors.red)
 
for line in textLines:
    text.textLine(line)
     
pdf.drawText(text)


# drawing a image at the
# specified (x.y) position
pdf.drawInlineImage(image, 130, 200)
 
# saving the pdf
pdf.save()