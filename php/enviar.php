<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Vayne|Lore, Habilidades, Skin </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet"  href="../css/contacto.css">
	<link rel="icon" href="imagenes/favico.png" sizes="16x16" type="image/png" >

</head>
<body>
	
	<header class="encabezado">
		<h1>Vayne</h1>
		<h2>La Cazadora Nocturna</h2>
		<nav>		
				<a href="../index.html">Inicio</a>
				<a href="../historia.html">Historia</a>
				<a href="../contacto.html">Contacto</a>				
		</nav>
	

	</header>
	<section class="contenido">
    <h2>Formulario de Contacto</h2>
				<!-- Estoy en enviar.php
				Acá estaba el formulario
				-->
		<?php
			// Consigo los datos del form
			session_start();
			$nombre = $_POST['nombre'];
			$email  = $_POST['email'];
			$comentario = $_POST['comentario'];
		
			include("conexion.php");
			 		// escribir la query
			$insertar = "INSERT INTO historialdecontacto
							VALUES(
									null,
									'$nombre',
									'$email',
		 							'$comentario'
									 )";
					//Ejecuto query
			$insertar_ej = mysqli_query($conexion, $insertar);

			if($insertar_ej == true){
					// Uno o varios separados por ,
				$destinatario = "dcibeto@betodelacruz.com";
		
				$asunto = "Formulario desde web";
		
					// Junto todos los datos solicitados en el form en 1 sola variable
				$cuerpo = "$nombre te envío el formulario, contactalo a su mail $email Su mensaje es: $comentario ";

				$cabecera = "From: Nombre <mail@sitio.com>";
					
				mail($destinatario,
			 	$asunto,
			 	$cuerpo,
			 	$cabecera);
			
			echo "Mensaje enviado¡";	
			}else{
				echo "Error, no se pudo enviar comentario.";
			}
		
		?>
	

	</section>