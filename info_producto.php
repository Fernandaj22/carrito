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
<!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript" src="../public/js/funciones.js"></script>
<script type="text/javascript" src="<?=JS?>config.js"></script>

	<title>Nombre de la página - Detalles</title>
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
	    		<li class="hover"><a href="<?=URL?>Carrito/miCarrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Mi Carrito</a></li>
        		<li class="hover"><a href="<?=URL?>Carrito/"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 10px;" class="sinpadding">
		<div class="col-xs-12 col-sm-6 col-md-6">  
              <div class="imagen-producto">
              	<img src="../public/img/camisa1.png">
              </div>
		</div>
		<div  class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<form class="datos-producto col-xs-12  col-md-12" >
               <input type="text" name="" value="Camisa Azul Rey" class="nombrep col-xs-12  col-md-12" disabled>
              <input type="text" name="" value="$525.00" class="precio col-xs-12" disabled>
              <textarea type="text" name="" value=""  class="descripcion col-xs-12" disabled>Camisa 100% algodón, hecha con en territorios chinos. Color azul fuerte.</textarea>
              <div class="contenedorcan">
              	<p class="nombrec">Cantidad:</p>
              	<input type="number" class="cantidad" value="1" name="quantity" min="0" max="20">
              </div>
              <div class="contenedorcan">
              	<p class="nombrec">Tallas disponibles:</p>
              	<select class="cantidad">
              		<option>Chica</option>
              		<option>Mediana</option>
              		<option>Grande</option>
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


<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript">window.addEventListener('load', verDetalles, true);</script>-->
</body>
</html>