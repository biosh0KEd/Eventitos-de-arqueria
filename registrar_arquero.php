<html>
<head>
	<meta charset="utf-8"/>
	<title>Eventitos de arqueria</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header class="cabecera">
		<img src="images/logo.png"/>
		<h1>Eventitos de arqueria</h1>
	</header>
	<nav class="menu">
		<ul>
			<li>
				<a href="index.php#Home">Home</a>
			</li>
			<li>
				<a href="eventos.php">Eventos</a>
			</li>
			<li>
				<a href="atletas.php">Atletas</a>
			</li>
			<li>
				<a href="estadisticas.php">Estadisticas</a>
			</li>
			<li>
				<a href="info_arqueria.php">Arqueria</a>
			</li>
		</ul>
	</nav>
	<section  class="cuerpo">
		<div class="contenido_cuerpo">
			<form class="formularioA" action="sql/r_arqueros.php" method="post">
				<div class="EFA">
					<label for="nombre">Nombre</label>
        	<input type="text" required id="nombre" name="nombre"/>
        </div>
        <div class="EFA">
        	<label for="apellido">Apellido</label>
        	<input type="text" required id="apellido" name="apellido"/>
        </div>
        <div class="EFA">
        	<label for="fecha_nacimiento">Fecha de nacimiento</label>
        	<input type="date" required id="fecha_nacimiento" name="fecha_nacimiento"/>
        </div>
        <div class="EFA">
        	<label for="tipo_arco">Tipo de arco</label>
        	<input type="text" required id="tipo_arco" name="tipo_arco"/>
        </div>
        <div class="EFA">
        	<label for="pais">Pais</label>
        	<select id="pais" name="pais">
        		<option value="MEX">
        			Mexico
        		</option>
        		<option value="ARG">
        			Argentina
        		</option>
        		<option value="USA">
        			USA
        		</option>
        		<option value="BRA">
        			Brasil
        		</option>
        		<option value="AUS">
        			Australia
        		</option>
        		<option value="AUT">
        			Austria
        		</option>
        		<option value="CAN">
        			Canada
        		</option>
        		<option value="CHL">
        			Chile
        		</option>
        		<option value="DNK">
        			Dinamarca
        		</option>
        		<option value="GTM">
        			Guatemala
        		</option>
        		<option value="ITA">
        			Italia
        		</option>
        		<option value="JPN">
        			Japon
        		</option>
        		<option value="KOR">
        			Korea
        		</option>
        		<option value="TUR">
        			Turquia
        		</option>
        	</select>
        </div>
        <input class="boton EFA" type="submit" value="registrar"/>
			</form>
		</div>
	</section>
	<footer class="pie">
		<div class="patrocinadores">
			<img src="images/logo_ceti.png" alt="Logotipo del ceti"/>
		</div>
    <div class="informacio">
    </div>
	</footer>
</body>
</html>