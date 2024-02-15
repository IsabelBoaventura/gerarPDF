//buscar o botao
const btnGenerate = document.querySelector('#generate-pdf');
const elFooter = document.querySelector('#html_footer');
const elHeader  = document.querySelector('#html_header');


//criar o evento
btnGenerate.addEventListener("click", () =>{
    //conteudo do HTML

    const conteudo = document.querySelector("#content");

   //  console.log( elHeader );

    //configuração do arquivo final em PDF
    const options = {
        margin: [20, 20, 10, 10],
        filename: "arquivo.pdf",
        header: " teste de header ",
	    footer:  "teste para o footer "  ,  
        html2canvas: { scale: 2},
        jsPDF: {unit: "mm", format: "A4", orientation: "portrait"}
    }

    // config from your example
    const config = {
        filename:  'testando.pdf',
        image: {type: 'jpeg',quality: 1.0},
        html2canvas: {dpi: 75, scale: 2, letterRendering: true},
        pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
        jsPDF: {orientation: 'portrait', unit: 'in', format: 'a4', compressPDF: true},
        // pdfCallback: pdfCallback
    }






 





            //mais um teste 

            html2pdf( conteudo , {
                margin: 10,
                filename: 'Example.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2, logging: true, dpi: 300, letterRendering: true },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'Portrait' }
            }).toPdf().get('pdf')
            .then(function (pdf) {
                var totalPages = pdf.internal.getNumberOfPages();
            
                for (let i = 1; i <= totalPages; i++) {
                    pdf.setPage(i);
                    pdf.setFontSize(10);
                    pdf.setTextColor(150);
                    //Add you content in place of example here
                    pdf.text('IsabelBoaventura', pdf.internal.pageSize.getWidth() - 100, pdf.internal.pageSize.getHeight() - 10);
                }
            }).save();
    
  


});