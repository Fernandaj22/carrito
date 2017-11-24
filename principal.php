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

	<header>
		<div class="container-fluid encabezado">
			<div class="logo">
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				<a href="#">MenShop</a>
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

	<div class="container-fluid banner">
		<section class="col-md-12">
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner banner" role="listbox">
					<div class="item active banner">
						<img src="img/b1.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">¡Bienvenido!</h1>
							<p class="tamañop">No podrás parar de comprar</p>
						</div>
					</div>

					<div class="item banner">
						<img src="img/b2.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">Las mejores prendas</h1>
							<p class="tamañop">Todo el estilo que necesitas</p>
						</div>
					</div>

					<div class="item banner">
						<img src="img/b3.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<h1 class="tamañoh1">Viste a la moda</h1>
							<p class="tamañop">Prendas novedosas</p>
						</div>
					</div>

				</div>
			</div>
		</section>
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

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="micart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Mi Carrito</a></li>
    		</ul>
 		</div>
	</nav>

	<div class="container-fluid padding">
		<div class="main col-xs-12 buscador">
			<select class="col-xs-12">
				<option>Todas las categorías</option>
				<option>Playeras</option>
				<option>Camisas</option>
				<option>Pantalones</option>
				<option>Suéter/Chamarra</option>
				<option>Zapatos</option>
			</select>
			<input type="text" name="" placeholder="Ingresa el nombre del artículo">
			<div class="buscar"><i class="fa fa-search" aria-hidden="true"></i></div>
		</div>
	</div>


	<div class="container top">
		<section class="main row">
			<div class="col-xs-12">
				<div class="seccion1">
					<div class="img img-responsive"></div>
					<a href="playeras.php">PLAYERAS</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion2">
					<a href="camisas.php">CAMISAS</a>
					<div class="img"></div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion3">
					<div class="img"></div>
					<a href="pantalones.php">PANTALONES</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion4">
					<div class="img"></div>
					<a href="chamarras.php">SUÉTER/<br>CHAMARRAS</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="seccion5">
					<div class="img"></div>
					<a href="zapatos.php">ZAPATOS</a>
				</div>
			</div>
		</section>
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