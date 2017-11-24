<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript" src="js/funciones2.js"></script>
	<title>Nombre de la página - Detalles</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				<a href="principal.php">MenShop</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<a href="">Iniciar Sesión</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate0 img-responsive" id="top"></div>
	</div>

	<nav class="navbar navbar-default border" role="navigation">
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
		     	 <li class="hover"><a href="adminplayeras.php">Playeras</a></li>
		      	 <li class="hover"><a href="admincamisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="adminpantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="adminchamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="adminzapatos.php">Zapatos</a></li>
	    	</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 40px; padding-bottom: 40px;">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lado5">
              <div class="disponibilidad col-xs-6 col-md-3">
                <h3>AGOTADO</h3>
              </div>
              <div class=" imagen-producto">
              	<img src="img/camisa1.png" class="col-xs-12 img-responsive">
              </div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lado5">
			<form class="datos-producto col-xs-12  col-md-10" action="index.html" method="post">
			  <div class="editable">
			  	<i class="fa fa-pencil" aria-hidden="true" title="Editar"> </i>
			  	<p>   Campos editables</p>
			  </div>
              <input type="text" name="" value="Camisa Azul Rey" class="nombrep col-xs-12  col-md-12">
              <input type="text" name="" value="$525.00" class="precio col-xs-12  col-md-10">
              <textarea type="text" name="" value=""  class="descripcion col-xs-12">Camisa azul con botones blancos. Hecha en China</textarea>
              <div class="contenedorcan">
              	<p class="nombrec">Cantidad a agregar:</p>
              	<input type="number" class="cantidad" value="1" name="quantity" min="0" max="20">
              </div>
              <input type="submit" id="enviar" class="button col-md-4 color1" name="" value="Actualizar">
              <button name="" class="button col-xs-6 col-sm-6 col-md-6 color0 hidden" value="">Agregar</button>
            </form>
		</div>
	</div>

	<footer>
		<div class="container" style="text-align: center; bottom: 0px;">
			<div class="col-xs-12 col-sm-4 col-md-4 centrado">
				<p>Facultad de Informática</p>
				<p>Centro de Desarrollo, Betas</p>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 centrado">
				<p>Contácto, reclamaciones, sugerencias</p>
				<p>email@correo.com</p>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 nombre">
				<i class="fa fa-registered" aria-hidden="true"> </i>
				<p>MenShop</p>
			</div>
		</div>
	</footer>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>