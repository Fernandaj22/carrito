<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../public/css/estilos-login.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
    <script type="text/javascript" src="../public/js/funciones-login.js"></script>
    <script type="text/javascript" src="<?=JS?>config.js"></script>
    </script>
    <title>Ingresa</title>
  </head>
  <body>
    <!-- ===========================HEADER============================ -->
      <div class="container-fluid header">
        <div class="nombre col-md-12">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          <h2>MenShop</h2>
        </div>
      </div>
    <!-- ===========================CONTENIDO============================ -->
    <div class="container-fluid cont">
      <img src="../public/img/regis-backgound.jpeg" id="img" class="img-decor img-responsive">
        <div class="center col-xs-12 col-sm-7 col-md-5">
              <button type="button" name="button" id="regis" class="change" onclick="registrarse()"><i class="fa fa-plus" aria-hidden="true"></i></button>
              <button type="button" name="button" id="log" class="change hidden" onclick="login()"><i class="fa fa-plus" aria-hidden="true"></i></button>
            <!-- <div class="izq col-md-6">
              <img src="img/loginbackground.jpeg" id="img" class="img-decor"alt="">
              <img src="img/regis-backgound.jpeg" class="hidden" id="img-decor">
            </div> -->
            <div class="hidden  registra col-md-12 col-xs-12" id="registro">
              <form class="registro"  method="POST" action="<?=URL?>Carrito/registrarUsuario">
                <div class="top col-xs-12">
                    <h1>Registrate</h1>
                    <h4>Podrás ser parte de nuestra comunidad</h4>
                </div>
                <div class="middle col-xs-12">
                      <input type="text" class=" col-xs-12  col-xs-12  col-md-10" placeholder="&#128104; |  Nombre" name="nombreRegistro" id="nombreRegistro">

                      <input type="email" class=" col-xs-12  col-md-10" name="mailRegistro" id="mailRegistro" placeholder=" &#9993  |  Correo">

                      <input type="password" class=" col-xs-12  col-md-10" name="passRegistro" id="passRegistro" placeholder="&#x1f511  |  Contraseña">
                      <select class="pregunta  col-xs-12  col-md-10" onchange="habilitar()" name="preguntaRegistro" id="preguntaRegistro">
                        <option>Elige una opcion</option>
                        <option id="1" value="1">Nombre de tu primera mascota</option>
                        <option id="2" value="2">Lugar donde se conocieron tus padres</option>
                        <option id="3" value="3">Titulo de tu libro favorito</option>
                      </select>
                      <input type="text"  class=" col-xs-12  col-md-10" id="respuesta" name="respuestaRegistro" placeholder="&#10003; | Respuesta" disabled>
                </div>
                <div class="bottom col-xs-12">
                      <input type="submit" class=" col-xs-8 col-md-6 registrate" id="registro" name="registrarse" value="Registrate">
                </div>
              </form>
            </div>
            <div class="der col-md-12 col-xs-12" id="login">
              <form class="ingreso" action="<?=URL?>Carrito/iniciar" method="POST">
                <div class="top col-xs-12">
                    <h1>Ingresa</h1>
                    <h4>Unete para poder llenar tu guardarropa</h4>
                </div>
                <div class="middle col-xs-12" id="mid">
                      <input type="email" class=" col-xs-12  col-md-10" id="mailLog" name="mailLog" placeholder=" &#9993  |  Correo">
                      <input type="password" class=" col-xs-12  col-md-10" id="passLog" name="passLog" placeholder="&#x1f511  |  Contraseña">
                </div>
                <div class="bottom col-xs-12">
                      <input type="submit" class="  col-xs-8 col-md-6 ingresa" name="login" value="Ingresa" onclick="entrar();">
                      <h6>¿olvidaste tu contraseña?<br><a class="link" href="#">Cambiar contraseña</a></h6>
                </div>
              </form>
          </div>
      </div>
    </div>
  </body>
</html>