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
				<img src="img/morro.jpg" class="fa tamaño">
				<a href="principal.php">The Morro</a>
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
		     	 <li class="hover"><a href="playeras.php">Playeras</a></li>
		      	 <li class="hover"><a href="camisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="pantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="chamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="zapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="micart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Mi Carrito <span class="circle">0</span></a></li>
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        		<li class="hover"><a href="miperfil.php"> Mi Cuenta</a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 10px;" class="sinpadding">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="imagen-producto">
				<img src="img/camisa1.png">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<form class="datos-producto col-xs-12  col-md-12" action="index.html" method="post">
              <input type="text" name="" value="Camisa Azul Rey" class="nombrep col-xs-12  col-md-12" disabled>
              <input type="text" name="" value="$525.00" class="precio col-xs-12" disabled>
              <textarea type="text" name="" value=""  class="descripcion col-xs-12" disabled>Camisa 100% algodón, hecha con en territorios chinos. Color azul fuerte.</textarea>
              <div class="contenedorcan">
              	<p class="nombrec">Cantidad en stock: </p>
              	<p class="nombrec">30</p>
              </div>
              <div class="contenedorcan">
              	<p class="nombrec">Talla:</p>
              	<select class="cantidad">
              		<option></option>
              	</select>
              </div>
              <div class="contenedorcan hidden">
              	<p class="nombrec">Talla:</p>
              	<select class="cantidad">
              		<option></option>
              	</select>
              </div>
              <input type="text" name="" value="AGOTADO	" class="nombrep col-xs-12 rojo hidden" disabled>
              <p class="centrado">Envíos a todo el país</p>
              <p class="centrado">Envío gratis durante la exhibición del producto y hasta agotar existencias</p>
              <button name="" class="button col-xs-6 col-sm-5 col-md-5 color0" value="">Agregar</button>
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