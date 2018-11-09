//Exportación del modulo de app para las rutas 
//const app = module (app); 
const dbC = require('../../config/dbConection');

module.exports =  app =>{
    const db =  dbC();
    //Pagina principal cargada con su respectiva ruta de el servidor
app.get('/', (req, res , next)=>{
        res.render('index');
});

//app.get('/Index/Prueba',(req, res, next) =>{
  //  db.query('select * from Usuarios',(err, result)=>{
    //    console.log('la base de datos contiene:     ',result);
      //  res.render('prueba',{
        //    res: result
        //});
 //   });
//});


//Chumel, los usuarios que están registrados en la base de datos son JosM y MarT los dos con 1234 de contraseña 
//Pasar este procedimiento para que solo llame un store procedure y que regrese un falso o verdadero
//AUN NO ESTÁ VALIDADO
app.post('/var', (req, res, next)=>{
   db.query('select * from Usuarios where acount = ?', req.body.us,(err, result)=>{
       console.log(result);
       if(err) res.redirect('/');
       if(result[0].UsType==1){
           console.log('soy usuario 1');
           res.render('prueba');
       }
       else if(result[0].UsType==2){
        console.log('soy usuario 2');
            res.render('prueba2');
       }
   })
});

}
