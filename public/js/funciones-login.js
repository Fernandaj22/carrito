function registrarse(){
  document.getElementById("login").classList.add("hidden");
  document.getElementById("regis").classList.add("hidden");
  document.getElementById("log").classList.remove("hidden");
  document.getElementById("registro").classList.remove("hidden");
}
function login(){
  document.getElementById("log").classList.add("hidden");
  document.getElementById("registro").classList.add("hidden");
  document.getElementById("regis").classList.remove("hidden");
  document.getElementById("login").classList.remove("hidden");
}
function habilitar(){
  document.getElementById("respuesta").disabled = false;
}
function regis(){
  var nombre = document.getElementById('nombreRegistro').value;
  var mail = document.getElementById('mailRegistro').value;
  var pass = document.getElementById('passRegistro').value;
  //var pregunta = document.getElementById('preguntaRegistro').value;
  var respuesta = document.getElementById('respuesta').value;

  if(nombre != "" && mail != "" && pass != "" && respuesta != ""){
    var url = config['url']+"carrito/registrarUsuario";
    var datos = "nombre="+nombre+"&mail="+mail+"&pass="+pass+"&respuesta="+respuesta;
    alert(nombre+mail+pass+respuesta);
    alert(url+" / "+datos); 
    logIn= new XMLHttpRequest();
    logIn.open("POST", url, true);
    logIn.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    logIn.send(datos);
    logIn.onreadystatechange = function(){
      if(logIn.readyState == 4){
         true;
       }
      }
  }else{
    alert("Completa los campos");
  }

}

// function entrar(){
//   var mail = document.getElementById('mailRegistro').value;
//   var pass = document.getElementById('passRegistro').value;

//   if(mail != "" && pass != "" ){
//     var url = config['url']+"carrito/iniciar";
//     var datos = "email="+mail+"&password="+pass;
//     alert(mail+pass);
//     alert(url+" / "+datos); 
//     logIn= new XMLHttpRequest();
//     logIn.open("POST", url, true);
//     logIn.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     logIn.send(datos);
//     logIn.onreadystatechange = function(){
//       if(logIn.readyState == 4){
//          true;
//        }
//       }
//   }else{
//     alert("Completa los campos");
//   }

// }