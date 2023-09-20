//buscar o botao
const btnGenerate = document.querySelector('#generate-pdf');
const elFooter = document.querySelector('#html_footer');
const elHeader  = document.querySelector('#html_header');


//criar o evento
btnGenerate.addEventListener("click", () =>{
    //conteudo do HTML
    const content = document.querySelector("#content");

    console.log( elHeader );

    //configuração do arquivo final em PDF
    const options = {
        margin: [20, 20, 10, 10],
        filename: "arquivo.pdf",
        header: " teste de hjeader ",
	    footer:  "%page"  ,  
        html2canvas: { scale: 2},
        jsPDF: {unit: "mm", format: "A4", orientation: "portrait"}
    }


    // //gerar e baixar o arquivo em pdf
    //
     html2pdf().set(options).from(content).save();



    // Enable all 'modes', with no explicit elements.
    // html2pdf().set({
    //     options , 
    //     pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
    // }).from(content).save() ;


    // No modes, only explicit elements.
    // html2pdf().set({
    //     options ,
    //     pagebreak: { before: '.beforeClass', after: ['#after1', '#after2'], avoid: 'img' }
    // }).from(content).save() ;


});