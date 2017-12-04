<?php 

	session_start();
	if(isset($_SESSION['nombreUsuario'])){
		$nombreUsuario = $_SESSION['nombreUsuario'];
		$conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
		$info = $conn->query("SELECT COUNT(*) AS Total FROM carrito WHERE nombreUsuario ='{$nombreUsuario}'");
		$producto = $info->fetch_assoc();
	}else{
		echo "<script>alert('Inicia sesión para crear un perfil')</script>";
		echo "<script>location.href='".URL."Carrito/'</script>";
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
	<title>TheMorro - Mi perfil</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<img src="../public/img/morro.jpg" class="fa tamaño">
				<a href="<?=URL?>Carrito/">TheMorro</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<?php 

					if (isset($nombreUsuario)) {
						echo "<a href='".URL."Carrito/login'>Cerrar Sesión</a>";
					}else{
						echo "<a href='".URL."Carrito/login'>Iniciar Sesión</a>";
					}

				 ?>
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
		     	 <li class="hover"><a href="<?=URL?>Carrito/playeras">Playeras</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/camisas">Camisas</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/pantalones">Pantalones</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/chamarras">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/zapatos">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
        		<li class="hover"><a href="<?=URL?>Carrito/miCarrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mi Carrito</a></li>
        		<li class="hover"><a href="<?=URL?>Carrito/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        		<li class="hover actual"><a href="#"><?=$nombreUsuario?></a></li>
    		</ul>
 		</div>
	</nav>

	<div class="container-fluid">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lado6">
			<h2 class="centrado"> Mi perfil</h2>

			<div class="panel panel-default personal">
			  <div class="panel-heading bold">Nombre</div>
			  <div class="panel-body">
			     <?=$nombreUsuario?>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title bold">Email</h3>
			  </div>
			  <div class="panel-body">
			    CORREO
			  </div>
			</div>

			<details>
			  <summary>Tarjetas utilizadas: </summary>
			  <p>5502 2154 98526 0152</p>
			  <p>5502 2154 98526 0152</p>
			  <p>5502 2154 98526 0152</p>
			  <p>5502 2154 98526 0152</p>
			</details>
			
			<details>
			  <summary>Direcciones utilizadas: </summary>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			  <p>Av. Pie de la Cuesta 2015-A no. 117 condominio Tamayo, Querétaro, Qro.</p>
			</details>
		</div>
		<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 lado6">
			<div class="historial">
				<h3>Historial de pedidos</h3>
				<div class="list-group">
				  <div class="list-group-item">
				    <p class="list-group-item-text">1 Pantalón Recto Azul</p>
				    <p class="list-group-item-text">25/08/2017</p>
				    <p class="list-group-item-text">Total de <span class="b">$542.32</span></p>
				  </div>
				</div>				
			</div>
		</div>
		<div class="vacios1"></div>
		<div class="vacios1"></div>
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
				<p>TheMorro</p>
			</div>
		</div>
	</footer>


<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
</body>
</html>