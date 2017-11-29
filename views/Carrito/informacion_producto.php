<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../public/css/estilos2.css">
    <link rel="stylesheet" type="text/css" href="../public/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
    <script type="text/javascript" src="../public/js/funciones2.js">
    </script>
    <title>Nombre de la tienda</title>
  </head>
  <body>
    <!-- ===========================HEADER============================ -->
    <header class="encabezado">
  		<div class="container-fluid ">
  			<div class="logo">
  				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
  				<a>MenShop</a>
  			</div>
  			<div class="redsociales">
  				<i class="fa fa-facebook-official" aria-hidden="true"></i>
  				<i class="fa fa-twitter-square" aria-hidden="true"></i>
  				<i class="fa fa-instagram" aria-hidden="true"></i>
  			</div>
  			<div class="login">
  				<a href="<?=URL?>Carrito/login">Iniciar Sesión</a>
  			</div>
  		</div>
  	</header>

  	<div class="container-fluid">
  		<div class="col-xs-12 imgcate0 img-responsive" id="top"></div>
  	</div>

  	<nav class="navbar navbar-default border col-xs-12" role="navigation">
    		<div class="navbar-header txto">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		 <a class="navbar-brand" href="" style="cursor:default;">Menú</a>
    		</div>

    		<div class="navbar-collapse collapse container">
  	   		<ul class="nav navbar-nav navbar-left right">
  		     	 <li class="hover"><a href="#">Playeras</a></li>
  		      	 <li class="hover"><a href="<?=URL?>Carrito/camisas">Camisas</a></li>
  		      	 <li class="hover"><a href="<?=URL?>Carrito/pantalones">Pantalones</a></li>
  		      	 <li class="hover"><a href="<?=URL?>Carrito/chamarras">Suéter/Chamarra</a></li>
  		      	 <li class="hover"><a href="<?=URL?>Carrito/zapatos">Zapatos</a></li>
  	    	</ul>

  	    	<ul class="nav navbar-nav navbar-right home">
          		<li class="hover"><a href="<?=URL?>Carrito/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      		</ul>
   		</div>
  	</nav>

      <!-- ===========================CONTENIDO============================ -->
        <div class="container-fluid cont">
          <div class="producto-inf col-xs-12  col-md-10">
            <div class="imagen-producto col-sm-6 col-md-6">
              <div class=" disponibilidad  col-md-3">
                <h3>AGOTADO</h3>
              </div>
              <img src="../public/img/camisa1.png" class="col-md-8 img-responsive" alt="">
            </div>
            <div class="informacion-producto col-xs-12 col-sm-6 col-xs-12  col-md-6">
              <form class="datos-producto col-xs-12  col-md-10" action="<?=URL?>Carrito/" method="post">
              <input type="text" name="" value="Camisa Azul Rey" class="nombre col-xs-12  col-md-12" disabled>
              <input type="text" name="" value="$525.00" class="precio col-xs-12  col-md-10" disabled>
              <textarea type="text" name="" value=""  class="descripcion col-xs-12  col-md-12"disabled>Camisa color azul. 100% algodon. Hecha en china</textarea>
              <input type="number" class="cantidad col-xs-12  col-md-4" value="1" name="quantity" min="0" max="20">
              <input type="submit" id="enviar" class="button col-md-4 hidden" name="" value="Guardar">
              <button name="" class="button col-xs-6 col-sm-6 col-md-6 " value=""> Agregar</button>
              </form>

              </select>
            </div>
          </div>
        </div>

  </body>
</html>