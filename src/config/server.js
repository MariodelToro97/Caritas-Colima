const express =  require('express');
const path = require('path');
const bodyParser =  require('body-parser');

const app = express();

//Configuración del puerto del Local Host
app.set('port', process.env.PORT || 3000);
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, '../app/views'));

app.use(express.static('public'));


app.use(bodyParser.urlencoded({extended: false}));

module.exports = app;
