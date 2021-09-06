//pagina para salir
var bPreguntar = true;
window.onclick = preguntarAntesDeSalir;
function preguntarAntesDeSalir()
{
if (bPreguntar)
return "¿Seguro que quieres salir?";
}            

function confirma() {
    //Ingresamos un mensaje a mostrar
    var mensaje = alert("Bienvenido a tu aplicacion!!!");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
    alert("¡Gracias por Entrar!");
    }   
    }
function confirma_pass() {
    //Ingresamos un mensaje a mostrar
    var mensaje = alert("Has cambiado de password Exitosamente !!!");
    //Detectamos si el usuario acepto el mensaje
    
    }   
    
function aviso() {
    //Ingresamos un mensaje a mostrar
    var mensaje = alert("Advertencia: Se va a crear una incidencia para un empleado!!!");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
    alert("¡Gracias por Entrar!");
    }
}

    function exit() {
        //Ingresamos un mensaje a mostrar
        var mensaje = alert("Estas a punto de cerrar tu sesion actual!!!!");
        //Detectamos si el usuario acepto el mensaje
        if (mensaje) {
        alert("¡Gracias por Salir!");
        }   
        }

//reloj de la aplicacion
function mueveReloj(){
    //reloj del sistema
    momentoActual = new Date()   
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    dia=momentoActual.getDate()
    mes=momentoActual.getMonth()
    year=momentoActual.getFullYear()    
    
    horaImprimible = hora + " : " + minuto + " : " + segundo 
    fechaImprimible = dia + "/" + mes + "/" + year
    
    document.form_reloj.reloj.value = horaImprimible
    setTimeout("mueveReloj()",1000)
    
    document.form_reloj.fecha.value = fechaImprimible
    setTimeout("mueveReloj()",1000)
    
//MUESTRA LA HORA DEL SISTEMA EN QUE TURNO SE ENCUENTRA
    fecha = new Date(); 
  hora = fecha.getHours();  
  if(hora >= 6 && hora < 14){
    texto = "Turno de: Ma&nacute;ana";    
  } 
  if(hora >= 14 && hora < 22){
    texto = "Turno de: Tarde";    
  }
  
   if(hora >=22 && hora < 6){
    texto = "No existe ningun turno Actual";    
  } 

  document.getElementById('txtsaludo').innerHTML = texto;
}    



 function pedirVoto(){ 
   	if (confirm("Esta p�gina est� genial (ya la puedes ver). Me das tu voto?")){ 
      	window.open("http://www.loquesea.com/votar.php?idvoto=12111","","") 
   	} 
}
























