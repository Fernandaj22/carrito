function registrarse(){
  document.getElementById("login").classList.add("hidden");
  document.getElementById("regis").classList.add("hidden");
  document.getElementById("img").classList.add("hidden");
  document.getElementById("log").classList.remove("hidden");
  document.getElementById("registro").classList.remove("hidden");
  document.getElementById("img-decor").classList.remove("hidden");
}
function login(){
  document.getElementById("log").classList.add("hidden");
  document.getElementById("registro").classList.add("hidden");
  document.getElementById("img-decor").classList.add("hidden");
  document.getElementById("regis").classList.remove("hidden");
  document.getElementById("login").classList.remove("hidden");
  document.getElementById("img").classList.remove("hidden");
}
function habilitar(){
  document.getElementById("respuesta").disabled = false;
}
