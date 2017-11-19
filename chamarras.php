<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<style>@import url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,800i');</style>
	<title>Nombre de la Tienda - Principal</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
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
				<a href="">Iniciar Sesión</a>
				<i class="fa fa-shopping-cart" aria-hidden="true" title="Carrito"></i>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate4 img-responsive" id="top"></div>
	</div>

	<nav class="navbar navbar-default border" role="navigation">
  		<div class="navbar-header txto">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
    		</button> 
    		 <a class="navbar-brand" href="#">Menú</a> 
  		</div>

  		<div class="navbar-collapse collapse container">
	   		<ul class="nav navbar-nav navbar-left right">
		     	 <li class="hover"><a href="playeras.php">Playeras</a></li>
		      	 <li class="hover"><a href="camisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="pantalones.php">Pantalones</a></li>
		      	 <li class="hover actual"><a href="#">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="zapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="micart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Tu Carrito</a></li>
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
    		</ul>
 		</div>
	</nav>

	<div class="container">
		<div class="main col-xs-12 buscador">
			<input type="text" name="" placeholder="Busca por nombre de producto">
			<div class="buscar"><i class="fa fa-search" aria-hidden="true"></i></div>
		</div>
	</div>

	<div class="container color">
			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
					<p class="tipo0">Suéter cuello redondo</p>
					<img src="img/sueter1.png">
					<p class="tipo1">$750.60</p>
					<div class="botones">
						<input type="submit" name="" value="Ver detalles" class="color1">
						<input type="submit" name="" value="Agregar al carrito" class="color0">
					</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
					<p class="tipo0">Suéter cuello V azul</p>
					<img src="img/sueter2.png">
					<p class="tipo1">$550.60</p>
					<div class="botones">
						<input type="submit" name="" value="Ver detalles" class="color1">
						<input type="submit" name="" value="Agregar al carrito" class="color0">
					</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
					<p class="tipo0">Chamarra Piel Sintética</p>
					<img src="img/chamarra1.png">
					<p class="tipo1">$1,150.60</p>
					<div class="botones">
						<input type="submit" name="" value="Ver detalles" class="color1">
						<input type="submit" name="" value="Agregar al carrito" class="color0">
					</div>
			</div>
			
	</div>
	<div class="container">
		<a href="#top" class="volver col-md-1 col-xs-12">Arriba</a>
	</div>

	<footer>
		<div class="container" style="text-align: center;">
			<div class="col-xs-12 col-sm-3 col-md-3 centrado">
				<p>Facultad de Informática</p>
				<p>Centro de Desarrollo, Betas</p>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 centrado">
				<p>Contácto, reclamaciones, sugerencias</p>
				<p>email@correo.com</p>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 centrado redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>

			<div class="col-xs-12 col-sm-3 col-md-3 nombre">
				<i class="fa fa-registered" aria-hidden="true"> </i>
				<p>MenShop</p>
			</div>
		</div>
	</footer>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>