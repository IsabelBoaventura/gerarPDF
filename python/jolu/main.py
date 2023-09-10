# import package
from reportlab.pdfgen import canvas
# import in SimpleDocTemplate
from reportlab.platypus import SimpleDocTemplate
from PIL import Image
 
report = canvas.Canvas("first_test.pdf")




 
# create document object
doc = SimpleDocTemplate("sample_image.pdf")
info = []
 
# directory to image file we want to use
image_file = "teste.jpg"
 
# create Image object with size specifications
im = Image(image_file, 3*inch, 3*inch)


 
# append Image object to our info list
info.append(im)
 
# build / save PDF document
doc.build(info)




 
report.drawString(50, 800, "**First PDF with ReportLab**")
report.save()