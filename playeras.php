<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
	<title>Nombre de la Tienda - Playeras</title>
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
				<a href="login.php">Iniciar Sesión</a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate1 img-responsive" id="top"></div>
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
		     	 <li class="hover actual"><a href="#">Playeras</a></li>
		      	 <li class="hover"><a href="camisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="pantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="chamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="zapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="micart.php"><span class="circle">6</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Mi Carrito</a></li>
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    		</ul>
 		</div>
	</nav>

	<section class="">
		<div class="container top">
			<div class="col-xs-12 col-sm-8 col-md-8 padding">
				<input class="input col-xs-6 col-md-8" id="" type="text" placeholder="Ingresa nombre del producto">
			</div>

			<div class="col-xs-12 col-sm-2 col-md-2 padding">
				<input type="submit" name="" value="Buscar" class="buscar">
			</div>
		</div>
	</section>

	<div class="container color">
			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
					<p class="tipo0">Playera Galgo</p>
					<img src="img/playera6.png">
					<p class="tipo1">$299.99</p>
					<div class="botones">
						<input type="submit" name="" value="Ver detalles" class="color1" onclick="location.href='info_producto.php'">
						<input type="submit" name="" value="Agregar al carrito" class="color0">
					</div>
			</div>
	</div>

	<div class="container">
		<a href="#top" class="volver col-md-1 col-xs-12">Arriba</a>
	</div>



	<footer>
		<div class="container" style="text-align: center;">
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