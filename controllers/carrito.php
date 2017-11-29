<?php 

	class Carrito extends Controller
	{
		public function prueba(){
			$this->view->render($this,"prueba");
		}
		/***********ACCEDER A LAS PANTALLAS USUARIO 2 (normal)***********/

		/*****Pantalla camisas*****/
		public function camisas()
		{
			$this->view->render($this, "camisas");
		}
		/*****Pantalla chamarras*****/
		public function chamarras()
		{
			$this->view->render($this, "chamarras");
		}
		/*****Pantalla pantalones*****/
		public function pantalones()
		{
			$this->view->render($this, "pantalones");
		}
		/*****Pantalla playeras*****/
		public function playeras()
		{
			$this->view->render($this, "playeras");
		}
		/*****Pantalla principal (con o sin usuario)*****/
		public function index()
		{
			$this->view->render($this, "principal");
		}
		/*****Pantalla zapatos*****/
		public function zapatos()
		{
			$this->view->render($this, "zapatos");
		}
		/*****Pantalla login/registro*****/
		public function login()
		{
			$this->view->render($this, "login");
		}
		/*****Pantalla mi carrito/perfil*****/
		public function miCarrito()
		{
			$this->view->render($this, "micart");
		}
		/*puebaaas*/
		public function infoProducto()
		{
			$this->view->render($this, "info_producto");
		}

		/***********ACCEDER A LAS PANTALLAS USUARIO 1 (admin)***********/

		/*****Pantalla camisas*****/
		public function admincamisas()
		{
			$this->view->render($this, "admincamisas");
		}
		/*****Pantalla chamarras*****/
		public function adminchamarras()
		{
			$this->view->render($this, "adminchamarras");
		}
		/*****Pantalla pantalones*****/
		public function adminpantalones()
		{
			$this->view->render($this, "adminpantalones");
		}
		/*****Pantalla playeras*****/
		public function adminplayeras()
		{
			$this->view->render($this, "adminplayeras");
		}
		/*****Pantalla principal (con o sin usuario)*****/
		public function adminprincipal()
		{
			$this->view->render($this, "adminPrincipal");
		}
		/*****Pantalla zapatos*****/
		public function adminzapatos()
		{
			$this->view->render($this, "adminzapatos");
		}
		public function editarProducto()
		{
			$this->view->render($this, "adinfo_producto");
		}
		public function agregarProducto()
		{
			$this->view->render($this, "nuevo_producto");
		}


		/***********ACCEDER A LAS FUNCIONES***********/

		/*****Función: Registro*****/
		public function registrarUsuario(){
			// //Recibimos los datos de regis() ubicado en ../public/js/funciones-login.js
			// $nombre = $_POST['nombre'];
			// $mail = $_POST['mail'];
			// $pass = $_POST['pass'];
			// //$pregunta = $_POST['pregunta'];
			// $respuesta = $_POST['respuesta'];
			// //Cargamos el modelo
			// $this->loadOtherModel('UsuarioCarrito');
			// //Mandamos a llamar registroUsuario() ubicado en -> "../models/UsuarioCarrito_model"
			// $this->UsuarioCarrito->registroUsuario($nombre, $mail, $pass, $respuesta);
			// //$this->view->render($this, "principal");
			$nombre = $_POST['nombreRegistro'];
			$mail = $_POST['mailRegistro'];
			$pass = $_POST['passRegistro'];
			$respuesta = $_POST['respuestaRegistro'];
			$pregunta = $_POST['preguntaRegistro'];
			if($nombre != "" && $mail != "" && $pass != "" && $respuesta != "" || $pregunta != ""){
				$this->loadOtherModel('UsuarioCarrito');
				//Mandamos a llamar registroUsuario() ubicado en -> "../models/UsuarioCarrito_model"
				$this->UsuarioCarrito->registroUsuario($nombre, $mail, $pass, $respuesta, $pregunta);
				echo "<script>alert('Usuario registrado con éxito')</script>";
				$this->view->render($this, "principal");
			}else{
				echo "<script>alert('Usuario no pudo ser registrado')</script>";
				$this->view->render($this, "login");
			
			}
		
			
		}

		/*****Función: Iniciar Sesión*****/
		public function iniciar(){
			//Recibimos los datos de $_POST de la pantalla login
			$email = $_POST['mailLog'];
			$password = $_POST['passLog'];
			//Cargamos el modelo
			$this->loadOtherModel('UsuarioCarrito');
			//Mandamos a llamar iniciarSesion($mail, $pass) ubicado en -> "../models/UsuarioCarrito_model"
			$login = $this->UsuarioCarrito->iniciarSesion($email, $password);
			echo $login;
			if($login['idTipoUsuario'] == "1"){
				if($login['pass'] == $password && $login['correo'] == $email){
					echo "<script>alert('Bienvenido administrador :)')</script>";
					$this->view->render($this, "adminprincipal");
				}else{
					echo "<script>alert('Usuario/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}
			}else{
				if($login['pass'] == sha1($password) && $login['correo'] == $email && $login['idTipoUsuario'] == "1"){
					echo "<script>alert('Bienvenido de vuelta :)')</script>";
					$this->view->render($this, "principal");
				}else{
					echo "<script>alert('Usuario/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}	
			}
			
		}


		/*****Función: agregar productos a bd*****/
		public function addProductoDB(){
			
			if(isset($_POST['Agregar'])){
				$categoria = $_POST['categoria'];
				$producto = $_POST['nombreProducto'];
				$descripcion = $_POST['descripcion'];
				$imagen = $_POST['Imagen'];
				$precio = $_POST['precio'];
				$cantidad = $_POST['cantidad'];
				if($categoria != "" && $producto != "" && $descripcion != "" && 
					$precio != "" && $cantidad != "" && $categoria != "0"){
					
					//echo $categoria."/".$producto."/".$descripcion."/".$imagen."/".$precio."/".$cantidad;
					$this->loadOtherModel('Admin');
					$agregar = $this->Admin->agregarProductoA($categoria, $producto, $descripcion, 
								$imagen, $precio, $cantidad);
					$nombreCategoria = $this->Admin->selectCateByID($categoria);
					$nameCate = $nombreCategoria['nombreCategoria'];
					echo "<script>alert('¡Producto agregado exitosamente!')</script>";
					switch ($nameCate) {
						case 'Camisas':
							$this->view->render($this, "admincamisas");
							break;
						case 'Sueter/Chamarra':
							$this->view->render($this, "adminchamarras");
							break;
						case 'Pantalones':
							$this->view->render($this, "adminpantalones");
							break;
						case 'Playeras':
							$this->view->render($this, "adminplayeras");
							break;
						case 'Zapatos':
							$this->view->render($this, "adminzapatos");
							break;
					}
				}
			}
			
		}


		public function deleteProducto(){
			$this->loadOtherModel('Admin');
			$select = $this->Admin->selectProductosId();
			$select['idProducto'];
		}
	}

 ?>