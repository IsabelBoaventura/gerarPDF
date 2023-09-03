const express = require("express")

//para trabalhar com o ejs
const ejs = require('ejs')

//para trabalhar com os caminhos
const path = require('path')

//para o módulo de pdf
const pdf = require('html-pdf')

const app = express()


//para atualizar o servidor automaticamente
const livereload = require('livereload')
const reload = livereload.createServer();
reload.watch(__dirname + "server.js")






//lista de dados para gerar o relatório
const passengers  = [
    {
        name: 'Joyce',
        flightNumber: 7859,
        time: '18h00'
    }, 
    {
        name: 'Isabel',
        flightNumber: 7859,
        time: '18h00'
    },
    {
        name: 'Uchoa',
        flightNumber: 7859,
        time: '18h00'
    },
    {
        name: 'Aldenir',
        flightNumber: 7859,
        time: '18h00'
    },
    {
        name: 'Gabriel',
        flightNumber: 7859,
        time: '18h00'
    },
    {
        name: 'Victor',
        flightNumber: 7859,
        time: '18h00'
    }
];



//criar a rota
app.get('/', ( request, response ) => {

    //caminho onde esta o arquivo  ejs
    const filePath =  path.join( __dirname, "print.ejs")

    //funcionalidade render do ejs
    ejs.renderFile(
        filePath ,
        { passengers } ,
        ( err, html ) =>{
            if( err ) {
                return response.send("Erro na Leitura do arquivo ")
            }

            //configuraçoes do PDF - para folhas A4
            const options = {
                height: "11.25in",
                width: "8.5in",
                header:{
                    height: "20mm"
                },
                footer:{
                    height: "20mm"
                }
            }

            //criar pdf
            pdf.create( html, options).toFile("report.pdf", (err, data ) => {
                if( err ){
                    return response.send('Erro ao gerar o pdf')
                }

                var apresenta = html ;
                var apresenta2 = "Arquivo gerado com sucesso" ;
                //enviar para o navegador 
                return response.send(apresenta2 )
            })


           
        })
    //caminho, objeto, e funcao 
    //return response.send( passengers )
    //agora este retorno estará dentro do ejs
})


//aplicativo do servidor irá ouvir na porta 3000
app.listen(3000);


//fazer refrash do servidor 
// app.listen(3000, () => {
//     console.log('Listening on port %d', port);
//     if (process.send) {
//         process.send('online');
//     }
// })
