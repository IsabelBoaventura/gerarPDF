# import in SimpleDocTemplate
from reportlab.platypus import SimpleDocTemplate
from PIL import Image
 
# create document object
doc = SimpleDocTemplate("sample_image.pdf")
info = []
 
# directory to image file we want to use
image_file = "sample_plot.png"
 
# create Image object with size specifications
im = Image(image_file, 3*inch, 3*inch)
 
# append Image object to our info list
info.append(im)
 
# build / save PDF document
doc.build(info)

