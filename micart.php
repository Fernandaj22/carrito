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
		     	 <li class="hover"><a href="playeras.php">Playeras</a></li>
		      	 <li class="hover"><a href="camisas.php">Camisas</a></li>
		      	 <li class="hover"><a href="pantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="chamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="zapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    		</ul>
 		</div>
	</nav>

	<div class="container-fluid">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lado6">
			<h2><i class="fa fa-user" aria-hidden="true"></i> Mi perfil</h2>

			<div class="panel panel-default personal">
			  <div class="panel-heading bold">Nombre</div>
			  <div class="panel-body">
			    María Fernanda Juárez Tirado
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title bold">Email</h3>
			  </div>
			  <div class="panel-body">
			    ferjuareztirado@gmail.com
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
			</details>

			<div class="historial">
				<h3>Historial de pedidos</h3>
				<div class="list-group">
				  <div class="list-group-item">
				    <p class="list-group-item-text">1 Pantalón Recto Azul</p>
				    <p class="list-group-item-text">25/08/2017</p>
				    <p class="list-group-item-text">Total de $542.32</p>
				  </div>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <p class="list-group-item-text">3 Camisas a cuadros verdes</p>
				    <p class="list-group-item-text">28/09/2017</p>
				    <p class="list-group-item-text">Total de $1042.92</p>
				  </div>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <p class="list-group-item-text">1 Pantalón Recto Azul</p>
				    <p class="list-group-item-text">25/08/2017</p>
				    <p class="list-group-item-text">Total de $542.32</p>
				  </div>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <p class="list-group-item-text">3 Camisas a cuadros verdes</p>
				    <p class="list-group-item-text">28/09/2017</p>
				    <p class="list-group-item-text">Total de $1042.92</p>
				  </div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 lado6">
			<h2><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Mi carrito</h2>

			<h3>Tienes 10 artículos en el carrito</h3>
			<div class="pedidos">
				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
					<p class="list-group-item-text">Cantidad:</p> 
					<input type="number" name="" min="0">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc">
					    <input type="submit" name="" value="Quitar" class="colore">
					</div>
				  </div>
				</div>

				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
					<p class="list-group-item-text">Cantidad:</p> 
					<input type="number" name="" min="0">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc">
					    <input type="submit" name="" value="Quitar" class="colore">
					</div>
				  </div>
				</div>

				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
					<p class="list-group-item-text">Cantidad:</p> 
					<input type="number" name="" min="0">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc">
					    <input type="submit" name="" value="Quitar" class="colore">
					</div>
				  </div>
				</div>

				<div class="list-group">
				  <div class="list-group-item select pedidot">
				    <p class="list-group-item-text bold">Camisa a cuadros roja</p>
					<p class="list-group-item-text">Cantidad:</p> 
					<input type="number" name="" min="0">
					<div class="opindividual">
						<input type="submit" name="" value="Comprar" class="colorc hovertop">
					    <input type="submit" name="" value="Quitar" class="colore hovertop">
					</div>
				  </div>
				</div>
			</div>

			<div class="opcompra">
				<input type="submit" name="" value="Limpiar carrito" class="color1 hovertop">
				<input type="submit" name="" value="Comprar todo" class="color0 hovertop">
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