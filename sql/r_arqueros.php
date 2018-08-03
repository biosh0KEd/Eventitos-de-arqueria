<?php
	include('consql.php');

	$nombre_arquero = $_POST["nombre"];
	$apellido_arquero = $_POST["apellido"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$tipo_arco = $_POST["tipo_arco"];
	$pais = $_POST["pais"];

	print ("$nombre_arquero, $apellido_arquero, $fecha_nacimiento, $tipo_arco, $pais");

	$ranking = "0";
    //$result = mysqli_query($con, "INSER INTO arquero VALUES ($fecha_nacimiento, $ranking, $nombre, $apellido, $tipo_arco, $pais)");
    $result = mysqli_query($con, "INSERT INTO arquero (fecha_de_nacimiento, Ranking, Nombre_Arquero, Apellido_Arquero, Tipo_de_arco, ID_Pais) VALUES ( '$fecha_nacimiento', $ranking, '$nombre_arquero', '$apellido_arquero', '$tipo_arco', '$pais')");
    if ($result) {
    	printf('<h1>Se registro correctamente</h1><a class="boton" href="../index.php">Regresar</a>');	
    } else {
    	echo "No se hizo el query";
    }
    printf(" %s\n", mysqli_error($con));
    mysqli_close($con);
?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Eventitos de arqueria</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	
</body>
</html>