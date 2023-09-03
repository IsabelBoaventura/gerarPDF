const express = require("express")

//para trabalhar com o ejs
const ejs = require('ejs')

//para trabalhar com os caminhos
const path = require('path')

//para trabalharmos com o puppeter
const puppeteer = require('puppeteer')

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

//criar a segunda rota
app.get('/pdf', async(request, response) => {
    //abrir o navegador 
    const browser = await puppeteer.launch()

    //no navegador irá abrir uma nova página
    const page = await browser.newPage()

    await page.goto('http://localhost:3000/' , {
        waitUntil: 'networkidle0'
    })

    //para o pdf
    const pdf = await page.pdf({
        printBackground: true,
        format: "Letter", 
        margin: {
            top: "20px", 
            bottom: "40px",
            left: "20px",
            right: "20px"
        }
    })

    //esperar pelo fechamento da pagina
    await browser.close()

    response.contentType("application/pdf")



    //aviso que terminou
    return response.send(pdf)
})



//criar a rota
app.get('/', ( request, response ) => {

    //caminho onde esta o arquivo  ejs
    const filePath =  path.join( __dirname, "print.ejs")

    //funcionalidade render do ejs
    ejs.renderFile( filePath, { passengers }, ( err, html ) =>{
        if( err ) {
            return response.send("Erro na Leitura do arquivo ")
        }
        //envia para o navegador
        return response.send( html )   
    })
})


//aplicativo do servidor irá ouvir na porta 3000
app.listen(3000);
