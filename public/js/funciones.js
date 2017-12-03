function verDetalles(idProducto){

	location.href=config['url']+"carrito/infoProducto?id="+idProducto;

}
function editar(idProducto){
	
	location.href=config['url']+"Carrito/editar?id="+idProducto;
}
function cargarPlayeras(){
	playerasAjax = new XMLHttpRequest();
	playerasAjax.open('GET','../public/php/playera.php');
	playerasAjax.send();
	playerasAjax.onreadystatechange = function(){
		
		if (playerasAjax.readyState == 4 && playerasAjax.status == 200){
			playera = JSON.parse(playerasAjax.responseText);
			//console.log(playera);
				for(i=0; i<playera.length; i++){
			
				div = 
				"<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+playera[i].nombre+"</p>"+
				"<img src='../public/img/"+playera[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+playera[i].precio+"</p>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+playera[i].idProducto+");' value='Ver detalles'"+
						" class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}


function cargarCamisas(){
	camisasAjax = new XMLHttpRequest();
	camisasAjax.open('GET','../public/php/camisa.php');
	camisasAjax.send();
	camisasAjax.onreadystatechange = function(){
		
		if (camisasAjax.readyState == 4 && camisasAjax.status == 200){
			camisa = JSON.parse(camisasAjax.responseText);
			//console.log(camisa);
				for(i=0; i<camisa.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+camisa[i].nombre+"</p>"+
				"<img src='../public/img/"+camisa[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+camisa[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+camisa[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+camisa[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarPantalones(){
	pantalonesAjax = new XMLHttpRequest();
	pantalonesAjax.open('GET','../public/php/pantalon.php');
	pantalonesAjax.send();
	pantalonesAjax.onreadystatechange = function(){
		
		if (pantalonesAjax.readyState == 4 && pantalonesAjax.status == 200){
			pantalon = JSON.parse(pantalonesAjax.responseText);
			//console.log(pantalon);
				for(i=0; i<pantalon.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+pantalon[i].nombre+"</p>"+
				"<img src='../public/img/"+pantalon[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+pantalon[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+pantalon[i].idProducto+"'>"+
				"<div class='botones'>"+
				"<input type='submit' id='idProducto' onclick='verDetalles("+pantalon[i].idProducto+");' value='Ver detalles'"+
				"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarChamarras(){
	chamarrasAjax = new XMLHttpRequest();
	chamarrasAjax.open('GET','../public/php/chamarra.php');
	chamarrasAjax.send();
	chamarrasAjax.onreadystatechange = function(){
		
		if (chamarrasAjax.readyState == 4 && chamarrasAjax.status == 200){
			chamarra = JSON.parse(chamarrasAjax.responseText);
			//console.log(chamarra);
				for(i=0; i<chamarra.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+chamarra[i].nombre+"</p>"+
				"<img src='../public/img/"+chamarra[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+chamarra[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+chamarra[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+chamarra[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarZapatos(){
	zapatosAjax = new XMLHttpRequest();
	zapatosAjax.open('GET','../public/php/zapato.php');
	zapatosAjax.send();
	zapatosAjax.onreadystatechange = function(){
		
		if (zapatosAjax.readyState == 4 && zapatosAjax.status == 200){
			zapato = JSON.parse(zapatosAjax.responseText);
			//console.log(zapato);
				for(i=0; i<zapato.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+zapato[i].nombre+"</p>"+
				"<img src='../public/img/"+zapato[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+zapato[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+zapato[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+zapato[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function cargarBusqueda(){
	string = localStorage.getItem('busqueda');
	localStorage.clear();
	keywords = string.split(" ");
	regex = "";
	alert(keywords.length);
	for (i = 0; i<keywords.length;i++){

		if(i==((keywords.length)-1)){
			regex= regex + keywords[i];
		}
		else{
			regex= regex + keywords[i]+"|";
		}
	}
	data = {'regex':regex};
	busquedaAjax = new XMLHttpRequest();
	busquedaAjax.open('POST','../public/php/busqueda.php');
	busquedaAjax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	busquedaAjax.send(encodeURI('reg=' + regex));
	busquedaAjax.onreadystatechange = function(){
		
		if (busquedaAjax.readyState == 4 && busquedaAjax.status == 200){
			busqueda = JSON.parse(busquedaAjax.responseText);
			console.log(busqueda);
				for(i=0; i<busqueda.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<p class='tipo0'>"+busqueda[i].nombre+"</p>"+
				"<img src='../public/img/"+busqueda[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+busqueda[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+busqueda[i].idProducto+"'>"+
				"<div class='botones'>"+
						"<input type='submit' id='idProducto' onclick='verDetalles("+busqueda[i].idProducto+");' value='Ver detalles'"+
						"class='color0'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function buscarProducto(){
	busqueda = document.getElementById("valorBuscar").value;
	localStorage.setItem("busqueda", busqueda);
	document.location.href = "busquedas";
}

/*PARA EL ADMIN*/

function acargarPlayeras(){
	var link = "location.href='<?=URL?>Carrito/editar'";
	playerasAjax = new XMLHttpRequest();
	playerasAjax.open('GET','../public/php/playera.php');
	playerasAjax.send();
	playerasAjax.onreadystatechange = function(){
		
		if (playerasAjax.readyState == 4 && playerasAjax.status == 200){
			playera = JSON.parse(playerasAjax.responseText);
			//console.log(playera);
				for(i=0; i<playera.length; i++){
			
				div = 
				"<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+playera[i].nombre+"</p>"+
				"<img src='../public/img/"+playera[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+playera[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}


function acargarCamisas(){
	camisasAjax = new XMLHttpRequest();
	camisasAjax.open('GET','../public/php/camisa.php');
	camisasAjax.send();
	camisasAjax.onreadystatechange = function(){
		
		if (camisasAjax.readyState == 4 && camisasAjax.status == 200){
			camisa = JSON.parse(camisasAjax.responseText);
			//console.log(camisa);
				for(i=0; i<camisa.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+camisa[i].nombre+"</p>"+
				"<img src='../public/img/"+camisa[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+camisa[i].precio+"</p>"+
				"<input type='text'readonly class='hidden' value='"+camisa[i].idProducto+"'>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarPantalones(){
	pantalonesAjax = new XMLHttpRequest();
	pantalonesAjax.open('GET','../public/php/pantalon.php');
	pantalonesAjax.send();
	pantalonesAjax.onreadystatechange = function(){
		
		if (pantalonesAjax.readyState == 4 && pantalonesAjax.status == 200){
			pantalon = JSON.parse(pantalonesAjax.responseText);
			//console.log(pantalon);
				for(i=0; i<pantalon.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+pantalon[i].nombre+"</p>"+
				"<img src='../public/img/"+pantalon[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+pantalon[i].precio+"</p>"+
				"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarChamarras(){
	chamarrasAjax = new XMLHttpRequest();
	chamarrasAjax.open('GET','../public/php/chamarra.php');
	chamarrasAjax.send();
	chamarrasAjax.onreadystatechange = function(){
		
		if (chamarrasAjax.readyState == 4 && chamarrasAjax.status == 200){
			chamarra = JSON.parse(chamarrasAjax.responseText);
			//console.log(chamarra);
				for(i=0; i<chamarra.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+chamarra[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+chamarra[i].nombre+"</p>"+
				"<img src='../public/img/"+chamarra[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+chamarra[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}

function acargarZapatos(){
	zapatosAjax = new XMLHttpRequest();
	zapatosAjax.open('GET','../public/php/zapato.php');
	zapatosAjax.send();
	zapatosAjax.onreadystatechange = function(){
		
		if (zapatosAjax.readyState == 4 && zapatosAjax.status == 200){
			zapato = JSON.parse(zapatosAjax.responseText);
			//console.log(zapato);
				for(i=0; i<zapato.length; i++){
			
				div = "<div class='col-xs-12 col-sm-4 col-md-3 centrado producto'>"+
				"<div class='opadmin'>"+
						"<i class='fa fa-pencil' aria-hidden='true' title='Editar'"+
						"onclick='editar("+playera[i].idProducto+")'></i>"+
						"<i class='fa fa-trash' aria-hidden='true' title='Eliminar'></i>"+
				"</div>"+
				"<p class='tipo0'>"+zapato[i].nombre+"</p>"+
				"<img src='../public/img/"+zapato[i].foto+"'>"+
				"<p class='tipo1'>"+"$"+zapato[i].precio+"</p>"+
				"<div class='botones'>"+
					"</div>"+
				"</div>";
					//console.log(div);
				document.querySelector('section').innerHTML += div;
			
				}
			
		}
	}
}
