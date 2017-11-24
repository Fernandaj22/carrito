<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/estilos2.css">
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
		      	 <li class="hover"><a href="#">Camisas</a></li>
		      	 <li class="hover"><a href="pantalones.php">Pantalones</a></li>
		      	 <li class="hover"><a href="chamarras.php">Suéter/Chamarra</a></li>
		      	 <li class="hover"><a href="zapatos.php">Zapatos</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right home">
	    		<li class="hover"><a href="micart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Mi Carrito</a></li>
        		<li class="hover"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> </i> Home</a></li>
    		</ul>
 		</div>
	</nav>

	 <div class="container"s>
            <div class="imagen-producto col-xs-12 col-sm-6 col-md-6">
              <div class=" disponibilidad">
                <h3>AGOTADO</h3>
              </div>
              <img src="img/camisa1.png" class="col-md-8 img-responsive" alt="">
           	</div>

           <div class="informacion-producto col-xs-12 col-sm-6 col-md-6 ">
              <form class="datos-producto col-xs-12  col-md-10" action="index.html" method="post">
              <input type="text" name="" value="Camisa Azul Rey" class="nombrep col-xs-12  col-md-12" disabled>
              <input type="text" name="" value="$525.00" class="precio col-xs-12  col-md-10" disabled>
              <textarea type="text" name="" value=""  class="descripcion col-xs-12  col-md-12" disabled>Camisa color azul. 100% algodon. Hecha en china</textarea>
              <input type="number" class="cantidad col-xs-12  col-md-4" value="1" name="quantity" min="0" max="20">
              <input type="submit" id="enviar" class="button col-md-4 hidden" name="" value="Guardar">
              <button name="" class="button col-xs-6 col-sm-6 col-md-6 " value=""> Agregar</button>
              </form>
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