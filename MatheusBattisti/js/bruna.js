//alert(' oi ');
console.log('Dentro do bruna.js linha 2 ');

//pegar o html
const btnGenerate = document.querySelector('#generate-pdf');


//função onde será feito o trabalho
btnGenerate.addEventListener("click", ()=>{

    //conteudo do pdf
    const content = document.querySelector('#content');

    //Configuração do arquivo final em pdf
    const options = {
        margin: [30, 30, 15, 20],
        filename: 'bruna_curriculo.pdf',
        html2canvas: {scale: 2},
        jsPDF: {unit: 'mm', format: 'a4', orientation:'portrait'}
    };

    //gerar e baixar o pdf
    html2pdf().set(options).from(content).save();
});