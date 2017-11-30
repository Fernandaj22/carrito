<?php 

	session_start();
	if(isset($_SESSION['nombreUsuario'])){
		$nombreUsuario = $_SESSION['nombreUsuario'];
	}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../public/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript" src="<?=JS?>config.js"></script>
<script type="text/javascript" src="../public/js/funciones.js"></script>
	<title>Nombre de la Tienda - Zapatos</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<img src="../public/img/morro.png" class="fa tamaño">
				<a href="#">TheMorro</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<?php 

					if (isset($nombreUsuario)) {
						echo "Bienvenido ". strtoupper($nombreUsuario)."<a href='".URL."Carrito/login'>Cerrar Sesión</a>";
					}else{
						echo "<a href='".URL."Carrito/login'>Iniciar Sesión</a>";
					}

				 ?>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="col-xs-12 imgcate5 img-responsive" id="top"></div>
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
		     	 <li class="hover"><a href="<?=URL?>Carrito/playeras">Playeras</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/camisas">Camisas</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/pantalones">Pantalones</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/chamarras">Suéter/Chamarra</a></li>
		      	 <li class="hover actual"><a href="#">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
        		<li class="hover"><a href="<?=URL?>Carrito/miCarrito"><span class="circle">6</span><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Mi Carrito</a></li>
        		<li class="hover"><a href="<?=URL?>Carrito/"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
    		</ul>
 		</div>
	</nav>

	<section class="">
 		<div class="container top">
 			<div class="col-xs-12 col-sm-10 col-md-10 padding"></div>
 			<div class="col-xs-12 col-sm-6 col-md-6 padding">
 				<input class="input col-xs-6 col-md-8" id="" type="text" placeholder="Ingresa nombre del producto">
 			</div>
 
 			<div class="col-xs-12 col-sm-2 col-md-2 padding">
 				<input type="submit" name="" value="Buscar" class="buscar">
 			</div>
  		</div>
 	</section>


	<section class="container color">
		
	</section>
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


<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript">window.addEventListener('load', cargarZapatos, true);</script>
</body>
</html>