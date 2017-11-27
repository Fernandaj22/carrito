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
<div class="bg"></div>
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
		      	 <li class="hover"><a href="admincamisas">Camisas</a></li>
		      	 <li class="hover"><a href="adminpantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="adminchamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="adminzapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="lectura"><a readonly>Administrador</a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container" style="padding-top: 40px; padding-bottom: 40px;">
		<div class="col-md-3"></div>
		<form role="form" class="formulario col-md-6">
			<label for="ejemplo_email_1" class="center titulo">Rellene la información del producto nuevo</label>
		   <div class="form-group center">
		   	<label for="ejemplo_email_1" class="subtitulos">Categoría</label>
		    <select class="opcion form-control">
		    	<option>Playeras</option>
		    	<option>Camisas</option>
		    	<option>Pantalones</option>
		    	<option>Suéter/Chamarra</option>
		    	<option>Zapatos</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="ejemplo_email_1" class="subtitulos">Nombre del producto</label>
		    <input type="email" class="form-control" id="ejemplo_email_1"
		           placeholder="Introduce el nombre del producto">
		  </div>
		  <div class="form-group">
		    <label for="ejemplo_password_1" class="subtitulos">Precio del producto</label>
		    <input type="password" class="form-control" id="ejemplo_password_1" 
		           placeholder="Introduce el precio del producto">
		  </div>
		  <div class="form-group">
		    <label for="ejemplo_password_1" class="subtitulos">Descripción del producto</label>
		    <textarea type="password" class="form-control resize" id="ejemplo_password_1" placeholder="Introduce una descripción del producto"></textarea>
		  </div>
		  <div class="form-group">
		  	<label for="ejemplo_password_1" class="subtitulos">Imagen del producto</label>
		    <input type="file" name="" class="">
		    <p class="help-block">Sólo formato jpg, jpeg, png</p>
		  </div>
		  <div class="form-group">
		    <label for="ejemplo_password_1" class="subtitulos">Tallas disponibles</label>
		    <div class="flex">
			    <label class="check"><input type="checkbox" name="">Chica</label>
			    <label class="check"><input type="checkbox" name="">Mediana</label>
			    <label class="check"><input type="checkbox" name="">Grande</label>
			</div>
		  </div>
  		  <input type="submit" class="btn btn-default derecha color0" value="Agregar producto">
		</form>
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