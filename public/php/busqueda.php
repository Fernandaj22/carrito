<?php
	//OBTENER REGEX DE BUSQUEDA
	$REGEX = $_POST['reg'];
	//OBTENER CONTACTOS DE LA BD
	//CREAR CADENA DE CONEXIÓN
	$conexion = new mysqli('localhost','root','','carrito3');
	//CREAR LA PETICIÓN
	$busqueda = "SELECT * FROM productos WHERE nombreProducto REGEXP '$REGEX';";
	//EJECUTAR PETICIÓN Y GUARDAR RESPUESTA
	//echo($playeras);
	$respuesta = $conexion->query($busqueda);
	//HACER ARREGLO Y VOLVERLO JSON
	$arreglo = array();
	while ($producto = $respuesta->fetch_object()) {
		array_push($arreglo, array(
			"foto"=>$producto->imagen,
			"nombre"=>utf8_decode($producto->nombreProducto),
			"precio"=>$producto->precio,
			"idProducto" => $producto->idProducto,
			"cantidad" => $producto->cantidad
		));
	}
	//IMPRIMIR LA RESPUESTA EN JSON
	echo json_encode($arreglo);
?>