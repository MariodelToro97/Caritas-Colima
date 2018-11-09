const app =  require('./config/server');
require('./app/routes/Routes')(app);


//Inicializar el servidor
app.listen(app.get('port'), () => {
console.log('Servidor en el puerto', app.get('port'));
});


