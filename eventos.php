<html>
<head>
	<meta charset="utf-8"/>
	<title>Eventitos de arqueria</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header class="cabecera">
		<img src="images/logo.png" alt="logotipo"/>
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
	<section class="cuerpo">
      <img class="imagen-principal" src="images/Eventos.jpg" altr="imagen principal"/>
    <div class="contenido_main" >
    	<?php  
    		$link = mysqli_connect("localhost", "root", "") or die ("No se puede conectar con el servidor" . mysqli_error()); 
    		$BDseleccionada = mysqli_select_db($link, "eta") or die("No se puede seleccionar la base de datos");
    		$result = mysqli_query($link, "SELECT nombre_evento, Lugar_del_evento, Fecha_Inicio from evento;")or die("No se puede hace la consulta a la base de datos");
    		if (mysqli_num_rows($result) > 0){
    				while($row = mysqli_fetch_assoc($result)){
    					print('<a class="eventos" href="showevents.php"/a> ' . $row["nombre_evento"] . " - " . $row["Lugar_del_evento"] . " - " . $row["Fecha_Inicio"]);
    					  
    				} 
    		} else {
    			printf("<p>No hay eventos todavia</p>");
    		}

    		mysqli_close($link);
    	?>
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