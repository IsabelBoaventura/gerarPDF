//buscar o botao
const btnGenerate = document.querySelector('#generate-pdf');

//criar o evento
btnGenerate.addEventListener("click", () =>{
    //conteudo do HTML
    const content = document.querySelector("#content");

    //configuração do arquivo final em PDF
    const options = {
        margin: [10, 10, 10, 10],
        filename: "arquivo.pdf",
        html2canvas: { scale: 2},
        jsPDF: {unit: "mm", format: "A4", orientation: "portrait"}
    }


    //gerar e baixar o arquivo em pdf
    html2pdf().set(options).from(content).save();


});