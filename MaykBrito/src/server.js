const express = require("express")
const app = express()




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
    return response.send( 'Isabel 1204' )
})

app.listen(3000)
//aplicativo do servidor irá ouvir na porta 3000