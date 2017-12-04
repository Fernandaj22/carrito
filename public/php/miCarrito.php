<?php 
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito3');
	//CREAR LA PETICIÓN
	$idUsuario = $_POST['usuario'];
	$id = "SELECT * FROM productos WHERE idProducto IN(SELECT idProducto FROM carrito WHERE nombreUsuario = '$idUsuario')";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	// echo($id);
	$respuesta = $conexion->query($id);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($producto = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$producto->imagen,
			"nombre"=>utf8_decode($producto->nombreProducto),
			"precio"=>$producto->precio,
			"talla" => $producto->talla,
			"cantidad" => $producto->cantidad
		));
	}
	
	
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);	 
	
 ?>
 