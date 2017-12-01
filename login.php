<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilos-login.css">
   <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script type="text/javascript" src="js/funciones-login.js">
    </script>
    <title>Ingresa</title>
  </head>
  <body>
    <!-- ===========================HEADER============================ -->
      <div class="container-fluid header">
        <div class="nombre col-md-12">
          <img src="img/nombre.png" alt="">
        </div>
      </div>
    <!-- ===========================CONTENIDO============================ -->
    <div class="container-fluid cont">
      <img src="img/regis-backgound.jpeg" id="img" class="img-decor img-responsive">
        <div class="center col-xs-10 col-sm-7 col-md-5">
              <button type="button" name="button" id="regis" class="change" onclick="registrarse()"><img src="img/plus.png" alt=""></button>
              <button type="button" name="button" id="log" class="change hidden" onclick="login()"><img src="img/check.png" alt=""></button>
              <button type="button" name="button" id="regresar" class="change hidden" onclick="regresar()"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
            <!-- <div class="izq col-md-6">
              <img src="img/loginbackground.jpeg" id="img" class="img-decor"alt="">
              <img src="img/regis-backgound.jpeg" class="hidden" id="img-decor">
            </div> -->
            <div class="hidden  registra col-md-12 col-xs-12" id="registro">
              <form class="registro" action="index.html" method="post">
                <div class="top col-xs-12">
                    <h1>Registrate</h1>
                    <h4>Podrás ser parte de nuestra comunidad</h4>
                </div>
                <div class="middle col-xs-12">
                      <input type="text" class=" col-xs-12  col-xs-12  col-md-10" placeholder="&#128104;  |  Nombre">
                      <input type="email" class=" col-xs-12  col-md-10" name=""  placeholder=" &#9993  |  Correo">
                      <input type="password" class=" col-xs-12  col-md-10" name="" placeholder="&#x1f511  |  Contraseña">
                      <input type="password" class=" col-xs-12  col-md-10" name="" placeholder="&#x1f511  |  Repite tu contraseña">
                      <select class="pregunta  col-xs-12  col-md-10" onchange="habilitar();" name="">
                        <option value="" selected>Elige una opcion</option>
                        <option value="" id="1" >Nombre de tu primera mascota</option>
                        <option value="" id="2">Lugar donde se conocieron tus padres</option>
                        <option value="" id="3">Titulo de tu libro favorito</option>
                      </select>
                      <input type="text"  class=" col-xs-12  col-md-10" id="respuesta" placeholder="&#10003; | Respuesta" disabled>
                </div>
                <div class="bottom col-xs-12">
                      <input type="submit" class=" col-xs-8 col-md-6 registrate" id="registro" name="" value="Regístrate">
                </div>
              </form>
            </div>
          <div class=" der col-md-12 col-xs-12" id="login">
              <form class="ingreso" action="index.html" method="post">
                <div class="top col-xs-12">
                    <h1>Ingresa</h1>
                    <h4>Únete para poder llenar tu guardarropa</h4>
                </div>
                <div class="middle col-xs-12" id="mid">
                      <input type="email" class=" col-xs-12  col-md-10" name=""  placeholder=" &#9993  |  Correo">
                      <input type="password" class=" col-xs-12  col-md-10" name="" placeholder="&#x1f511  |  Contraseña">
                </div>
                <div class="bottom col-xs-12">
                      <input type="submit" class="  col-xs-8 col-md-6 ingresa" name="" value="Ingresa">
                      <h6>¿olvidaste tu contraseña?<br></h6><input type="button" class="  link" href="#" value="Cambiar contraseña" onclick="abrirpregunta()">
                </div>
              </form>
          </div>
          <div class="hidden contraseñas col-md-12 col-xs-12" id="pregunta">
              <div class="top col-xs-12">
                  <h1>¿Olvidaste tu contraseña?</h1>
                  <h4>Responde esta pregunta para poder modificar tu contraseña</h4>
              </div>
              <div class="middle col-xs-12">
                    <select class="pregunta  col-xs-12  col-md-10" onchange="habilitar()" name="">
                      <option value="">Elige una opcion</option>
                      <option value="" id="1">Nombre de tu primera mascota</option>
                      <option value="" id="2">Lugar donde se conocieron tus padres</option>
                      <option value="" id="3">Titulo de tu libro favorito</option>
                    </select>
                    <input type="text"  class=" col-xs-12  col-md-10" id="respuesta2" placeholder="&#10003; | Respuesta" disabled>
              </div>
              <div class="bottom col-xs-12">
                    <input type="submit" class=" col-xs-8 col-md-6 registrate" id="pregunta-env" name="" value="Listo">
              </div>
          </div>
          <div class=" hidden constraseñas col-md-12 col-xs-12" id="contraseña">
              <div class="top col-xs-12">
                  <h1>Cambia tu contraseña</h1>
              </div>
              <div class="middle col-xs-12">
                    <input type="password" class=" col-xs-12  col-md-10" name="" placeholder="&#x1f511  |  Contraseña">
                    <input type="password" class=" col-xs-12  col-md-10" name="" placeholder="&#x1f511  |  Repite tu contraseña">
                  </div>
              <div class="bottom col-xs-12">
                    <input type="submit" class=" col-xs-8 col-md-6 registrate" id="nuevaCont" name="" value="Guardar">
              </div>
          </div>
      </div>
    </div>
  </body>
</html>
