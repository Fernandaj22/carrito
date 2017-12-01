<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
	<title>Nombre de la Tienda - Principal</title>
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
	    		<li class="hover actual"><a href="micart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Mi Carrito <span class="circle">0</span></a></li>
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        		<li class="hover"><a href="miperfil.php"> Mi Cuenta</a></li>
    		</ul>
 		</div>
	</nav>

	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 lado6">
			<h2><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Mi carrito</h2>

			<h3>Tienes 10 artículos en el carrito</h3>
			<div class="pedidos">
				<div class="list-group">
				  <div class="list-group-item select pedidot">
				  	<div class="col-xs-12 close">
						<i class="fa fa-times" aria-hidden="true" title="Eliminar producto"></i>
					</div>
					<img src="img/sueter1.png" class="col-xs-12 col-md-2 imgc">
				    <p class="list-group-item-text bold col-md-10">Camisa a cuadros roja</p>
					    	

				  </div>
				</div>

				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
				    <p class="list-group-item-text nombres">Mediana</p>
					<p class="list-group-item-text">Cantidad:</p>
					<input type="number" name="" min="1" class="col-xs-4 col-sm-1 col-md-1 col-lg-1 cantidad">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc col-xs-5">
					    <input type="submit" name="" value="Quitar" class="colore col-xs-5">
					</div>
				  </div>
				</div>

				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
				    <p class="list-group-item-text nombres">Mediana</p>
					<p class="list-group-item-text">Cantidad:</p>
					<input type="number" name="" min="1" class="col-xs-4 col-sm-1 col-md-1 col-lg-1 cantidad">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc col-xs-5">
					    <input type="submit" name="" value="Quitar" class="colore col-xs-5">
					</div>
				  </div>
				</div>
				
				<div class="opcompra">
					<input type="submit" name="" value="Limpiar carrito" class="colore hovertop">
					<input type="submit" name="" value="Comprar todo" class="colorc hovertop">
				</div>
			</div>
	 	</div>
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
