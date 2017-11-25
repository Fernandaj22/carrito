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
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate2 img-responsive" id="top"></div>
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
		      	 <li class="hover actual"><a href="#">Camisas</a></li>
		      	 <li class="hover"><a href="adminpantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="adminchamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="adminzapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="lectura"><a readonly>Administrador</a></li>
    		</ul>
 		</div>
	</nav>

	<section class="">
		<div class="container top">
			<div class="col-xs-12 col-sm-2 col-md-2 padding"></div>
			<div class="col-xs-12 col-sm-6 col-md-6 padding">
				<input class="input col-xs-6 col-md-8" id="" type="text" placeholder="Ingresa nombre del producto">
			</div>

			<div class="col-xs-12 col-sm-2 col-md-2 padding">
				<input type="submit" name="" value="Buscar" class="buscar">
			</div>
		</div>
	</section>

	<div class="container color">
			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
					<div class="opadmin">
						<i class="fa fa-pencil" aria-hidden="true" title="Editar" onclick="location.href='adinfo_producto.php'"></i>
						<i class="fa fa-trash" aria-hidden="true" title="Eliminar"></i>
					</div>
					<p class="tipo0">Zapato Casual Azul Marino</p>
					<img src="img/camisa1.png">
					<p class="tipo1">$950.00</p>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-3 centrado producto">
				<div class="vacios"></div>
				<div class="mas">
					<i class="fa fa-plus-square-o grande" aria-hidden="true" title="Agregar nuevo producto" onclick="location.href='nuevo_producto.php'"></i>
				</div>
				<p class="textoa">Agregar nuevo producto</p>
				<div class="vacios"></div>
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