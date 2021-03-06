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
		     	 <li class="hover"><a href="adminplayeras.php">Playeras</a></li>
		      	 <li class="hover"><a href="admincamisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="adminpantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="adminchamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="adminzapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
        		<li class="lectura"><a readonly>Administrador</a></li>
    		</ul>
 		</div>
	</nav>


	<div class="container-fluid p">
		<form action="" method="">
		<div class="estiloi col-xs-12 col-sm-6 col-md-6">
			<i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar campos"> 	<span class="nombres">Información del producto</span></i>
			<select class="col-xs-12">
				<option style="display: none;">Categoría del producto</option>
				<option>Playeras</option>
				<option>Camisas</option>
				<option>Pantalones</option>
				<option>Suéter/Chamarra</option>
				<option>Zapatos</option>
			</select>
			<input type="text" name="" placeholder="Nombre del prodcto" class="nombrep col-xs-12">
			<input type="text" name="" placeholder="Precio del producto" class="nombrep col-xs-12">
			<textarea placeholder="Descripción del producto" class="resize col-xs-12 descripcion"></textarea>

		</div>
		<div class="estiloi col-xs-12 col-sm-6 col-md-6">
			<div>
				<p class="nombres">Imagen del producto</p>
				<input type="file" name="" class="col-xs-12">
				<span>Sólo formato jpg, jpeg, png</span>
			</div>
			<div class="contenedorcan col-xs-12">
				<p class="nombres">Cantidad de productos disponibles:</p>
				<input type="number" name="" min="1" class="cantidad">
			</div>
			<div class="contenedorcan col-xs-12">
              	<p class="nombres">Talla:</p>
              	<select class="cantidad">
              		<option></option>
              	</select>
              </div>
              <div class="contenedorcan col-xs-12 hidden">
              	<p class="nombres">Talla:</p>
              	<select class="cantidad">
              		<option></option>
              	</select>
              </div>
			<!-- <div class="flex col-xs-12">
			<p class="nombres">Talla disponible al cliente: </p>
			    <div class="checkbox">
			      <input type="radio" value=""> Chica	
			    </div>
			    <div class="checkbox">
			      <input type="radio" value=""> Mediana	
			    </div>
			    <div class="checkbox">
			      <input type="radio" value=""> Grande	
			    </div>
  			</div>
  			<div class="flex col-xs-12 hidden">
			<p class="nombres" title="Selecciona las tallas disponibles">Tallas disponibles al cliente: </p>
			    <div class="checkbox">
			      <label><input type="radio" value=""> 24</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="radio" value=""> 25</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="radio" value=""> 26</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="radio" value=""> 27</label>
			    </div>
  			</div> -->
		</div>
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