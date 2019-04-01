<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Xpro Empresas</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/contactanos.css">
</head>
<body>

<nav>
	<div id="menu-principal">	

				<div id="x-blanca">
					<img src="img/X-Blanca.png">
					</div>

				<div id="opciones-menu-principal">
					<p id="redes">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</p>
					
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li>-</li>
						<li><a href="nosotros.html">Nosotros</a></li>
						<li>-</li>
						<li><a href="galeria.html">Galeria</a></li>
						<li>-</li>
						<li><a href="contactanos.php">Contactanos</a></li>
						<li>-</li>
						<li><a href="trabajaconnosotros.html">Trabaja con nosotros</a></li>
						<li>-</li>
						<li><a href="#">Nuestros clientes</a></li>
					</ul>
				
					<p id="eslogan">Servicios de eventos festivos y publicitarios a nivel profesional</p>
				</div>
				
	</div>

</nav>


<div id="wrap">
	<div id="menu-vertical">
		<img src="img/cabeceraMenu.jpg">
		<p>En Pro de nuestros clientes</p>
		<ul id="opciones-menu-vertical">
			<li>Productora de Eventos</li>
			<li><a href="#">Eventos</a></li>
			<li><a href="#">Outsourcing</a></li>
			<li><a href="#">Catering y coffees</a></li>
			<li><a href="marketing.html">Marketing, imagen y publicidad</a></li>
		</ul>
	</div>

	<div id="contenido-contacto">
		
		<div id="texto-contacto">
					<img src="img/logo x pro blanco (1).png">
					<div><br>
							Escríbenos a: 

							contacto@xproempresas.cl <br><br>

							Tel: 51 – 2 664611 <br><br>

							Cel: +56 9 56501132 <br><br>
					</div>
		</div>

		<div id="formulario">
			<h1>Envianos un mensaje</h1><br>
		
			<form action="" method="post" id="form">
					<table>
					
						<tr>
								<td><label>Nombre:</label></td>
								<td><input name="Nombre" required></td>

						</tr>
						<tr>
								<td><label>Correo:</label></td>
								<td><input type="email" name="Correo" required></td>

						</tr>
						<tr>
								<td><label>Mensaje:</label></td>
								<td><textarea name="Mensaje" required></textarea></td>

						</tr>
								
									
					</table>
					<button name="boton">Enviar mensaje</button>
			</form>
		<div id="resultado"></div>
		</div>
	</div>
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="conecta.js"></script>
</body>
</html>