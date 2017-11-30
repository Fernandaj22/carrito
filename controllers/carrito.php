<?php 

	class Carrito extends Controller
	{
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
			session_destroy();
			$this->view->render($this, "login");
		}
		/*****Pantalla mi carrito/perfil*****/
		public function miCarrito()
		{
			$this->view->render($this, "micart");
		}
		/*puebaaas*/
		public function infoProducto($idProducto)
		{
			$this->view->render($this, "info_producto");
			$prueba = $_GET['id'];

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
			session_start();
			$nombre = $_POST['nombreRegistro'];
			$mail = $_POST['mailRegistro'];
			$pass = $_POST['passRegistro'];
			$respuesta = $_POST['respuestaRegistro'];
			$pregunta = $_POST['preguntaRegistro'];
			if($nombre != "" && $mail != "" && $pass != "" && $respuesta != "" || $pregunta != ""){
				$this->loadOtherModel('UsuarioCarrito');
				//Mandamos a llamar registroUsuario() ubicado en -> "../models/UsuarioCarrito_model"
				$this->UsuarioCarrito->registroUsuario($nombre, $mail, $pass, $respuesta, $pregunta);
				$_SESSION['nombreUsuario'] = $nombre;
				$_SESSION['correo'] = $mail;
				echo "<script>alert('Usuario registrado con éxito')</script>";
				// $this->view->render($this, "principal");
				header('Location:'.URL.'Carrito/');
			}else{
				echo "<script>alert('Usuario no pudo ser registrado')</script>";
				$this->view->render($this, "login");
			
			}
		
			
		}

		/*****Función: Iniciar Sesión*****/
		public function iniciar(){
			session_start();
			//Recibimos los datos de $_POST de la pantalla login
			$email = $_POST['mailLog'];
			$password = $_POST['passLog'];
			//Cargamos el modelo
			$this->loadOtherModel('UsuarioCarrito');
			//Mandamos a llamar iniciarSesion($mail, $pass) ubicado en -> "../models/UsuarioCarrito_model"
			$login = $this->UsuarioCarrito->iniciarSesion($email, $password);

			//print_r($login['correo']);
			if($login['idTipoUsuario'] == "1"){
				if($login['pass'] == $password && $login['correo'] == $email){
					$_SESSION['nombreUsuario'] = $login['nombreUsuario'];
					echo "<script>alert('Bienvenido administrador :)')</script>";
					//$this->view->render($this, "adminprincipal");
					header('Location:'.URL.'Carrito/adminPrincipal');
				}else{
					echo "<script>alert('Usuario/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}
			}else{
				if($login['pass'] == $password && $login['correo'] == $email && $login['idTipoUsuario'] == "2"){
					$_SESSION['nombreUsuario'] = $login['nombreUsuario'];
					$_SESSION['correo'] = $login['correo'];
					echo "<script>alert('Bienvenido de vuelta')</script>";
					//$this->view->render($this, "principal");
					header('Location:'.URL.'Carrito/');
				}else{
					echo "<script>alert('Usuario/Contraseña incorrecto')</script>";
					$this->view->render($this, "login");
				}	
			}
			
		}


		/*****Función: agregar productos a bd*****/
		public function addProductoDB(){
			//echo $temp = $_POST['talla'];;
			if(isset($_POST['Agregar'])){
				switch ($_POST['talla']) {
					case 'c':
						$talla = "chica";
						break;
					case 'm':
						$talla = "mediana";
						break;
					case 'g':
						$talla = "grande";
						break;
					default:
						$talla = "chica";	
						break;			
				}
				$categoria = $_POST['categoria'];
				$producto = $_POST['nombreProducto'];
				$descripcion = $_POST['descripcion'];
				$imagen = "/img/".$_POST['Imagen'];
				$precio = $_POST['precio'];
				$cantidad = $_POST['cantidad'];
				if($categoria != "" && $producto != "" && $descripcion != "" && 
					$precio != "" && $talla != "" && $categoria != "0"){
					//echo $imagen;
					echo $categoria."/".$producto."/".$descripcion."/".$img."/".$precio."/".$talla;
					$this->loadOtherModel('Admin');
					$agregar = $this->Admin->agregarProductoA($categoria, $producto, $descripcion, 
																$imagen, $precio, $talla, $cantidad);
					echo "<script>alert('¡Producto agregado exitosamente!')</script>";
					//print_r($agregar);
					switch ($categoria) {
						case '1':
							//$this->view->render($this, "adminplayeras");
							header('Location:'.URL.'Carrito/adminplayeras');
							break;
						case '2':
							//$this->view->render($this, "admincamisas");
							header('Location:'.URL.'Carrito/admincamisas');
							break;
						case '3':
							//$this->view->render($this, "adminpantalones");
							header('Location:'.URL.'Carrito/adminpantalones');
							break;
						case '4':
							//$this->view->render($this, "adminchamarras");
							header('Location:'.URL.'Carrito/adminchamarras');
							break;
						case '5':
							//$this->view->render($this, "adminzapatos");
							header('Location:'.URL.'Carrito/adminzapatos');
							break;
					}
				}else{
					echo "<script>alert('Error inesperado, reintentar más tarde')</script>";
					$this->view->render($this, "nuevo_producto");
				}
			

			 }
			
		}
		
	}

 ?>
