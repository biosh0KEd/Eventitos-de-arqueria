<html>
<head>
	<meta charset="utf-8">
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
      <img class="imagen-principal" src="images/Master_Heon_Kim.jpg" altr="imagen principal"/>
    <div class="contenido_main" >
    	<?php
		$con = mysqli_connect("127.0.0.1", "root", "") or die ("No se puede conectar con el servidor" . mysqli_error()); 
	    		$BDseleccionada = mysqli_select_db($con, "eta") or die("No se puede seleccionar la base de datos");
		$result = mysqli_query($con,"SELECT evento.nombre_evento, evento.Lugar_del_evento, evento.Fecha_Inicio, evento.fecha_Termino, arquero.Nombre_Arquero, arquero.Apellido_Arquero,arquero.Tipo_de_arco, arquero.ID_Pais from evento INNER JOIN asisten ON evento.ID_Evento = asisten.ID_Evento INNER JOIN arquero ON asisten.ID_Arquero = arquero.ID_Arquero where (evento.ID_Evento = asisten.ID_Evento);")or die("No se puede hacer la consulta");
		printf(" %s\n", mysqli_error($con));
			if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
			    					print('<h3 class="eventos"/h3>' . $row["nombre_evento"] . " - ".$row["Lugar_del_evento"] . " - " . $row["Fecha_Inicio"]." - ".$row["fecha_Termino"]);
			    					print('<h3 class="arquero"/h3>' .$row["Nombre_Arquero"]. " - " .$row["Apellido_Arquero"]);
			    					print('<h3 class="arquero"/h3>' .$row["Tipo_de_arco"]. " - " .$row["ID_Pais"]);
				}
		}

		printf(" %s\n", mysqli_error($con));
	    mysqli_close($con);
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