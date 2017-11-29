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
<script type="text/javascript" src="../public/js/funciones2.js"></script>
	<title>Nombre de la página - Agregar producto</title>
</head>
<body>

	<header class="encabezado">
		<div class="container-fluid">
			<div class="logo">
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				<a href="<?=URL?>Carrito/adminPrincipal">MenShop</a>
			</div>
			<div class="redsociales">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
			<div class="login">
				<a href="<?=URL?>Carrito/login">Cerrar Sesión</a>
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
		     	 <li class="hover"><a href="<?=URL?>Carrito/adminplayeras">Playeras</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/admincamisas">Camisas</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminpantalones">Pantalones</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminchamarras">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="<?=URL?>Carrito/adminzapatos">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="lectura"><a readonly>Administrador</a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid" style="padding-top: 40px; padding-bottom: 40px;">
		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>

		<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 lado5">
			<form enctype="multipart/form-data" class="datos-producto col-xs-12  col-md-10" method="POST" action="<?=URL?>Carrito/addProductoDB">
			  <div class="editable">
			  	<i class="fa fa-pencil" aria-hidden="true" title="Editar"> </i>
			  	<p>   Campos editables</p>
			  </div>

			  <span class="btn btn-default btn-file">
    			<select class="escategoria" name="categoria">
				  		<option style="display: none;" value="0">Selecciona la categoría</option>
				  		<option value="1">Playeras</option>
				  		<option value="2">Camisas</option>
				  		<option value="3">Pantalones</option>
				  		<option value="4">Suéter/Chamarra</option>
				  		<option value="5">Zapatos</option>
				</select>
			  </span>
			  <span class="btn btn-default btn-file">
			   	Selecciona el archivo<input type="file" name="Imagen">
			   </span>
              <input type="text" name="nombreProducto" value="" class="nombrep col-xs-12  col-md-12" placeholder="Nombre del producto">
              <input type="text" name="precio" value="" class="precio col-xs-12  col-md-10" placeholder="Precio del producto">
              <textarea type="text" name="descripcion" value=""  class="descripcion col-xs-12" placeholder="Escriba una descripción del producto"></textarea>
              <div class="contenedorcan">
              	<p class="nombrec">Cantidad de artículos disponibles:</p>
              	<input type="number" class="cantidad" value="1" name="cantidad" min="0" max="20">
              </div>
              <input type="submit" id="enviar" class="button col-md-4 color0" name="Agregar" value="Subir producto">
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
</body>
</html>