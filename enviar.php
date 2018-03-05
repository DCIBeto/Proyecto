<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Vayne|Lore, Habilidades, Skin </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<link rel="stylesheet"  href="contacto.css">
	<link rel="icon" href="imagenes/favico.png" sizes="16x16" type="image/png" >

</head>
<body>
	
	<header class="encabezado">
		<h1>Vayne</h1>
		<h2>La Cazadora Nocturna</h2>
		<nav>		
				<a href="index.html">Inicio</a>
				<a href="historia.html">Historia</a>
				<a href="contacto.html">Contacto</a>				
		</nav>
	

	</header>
	<section class="contenido">
    <h2>Formulario de Contacto</h2>
				
				<?php
					$nombre = $_POST['nombre'];
					$email = $_POST['email'];
					$comentarios = $_POST['comentarios'];
					
					echo $nombre;
					$destinatario = "asd@asd.com,
									asdasd@asd.com";
									
					$asunto = "Formulario desde web";
					
					$cuerpo = "$nombre te envío el formulario, contactalo a su mail $email Su mensaje es:
					$comentarios .";
					
					$cabecera = 
							"From: Nombre A <mail@sitio.com>";
					
					mail($destinatario,
						$asunto,
						$cuerpo,
						$cabeceras);
						
						echo "Mensaje enviado: $cuerpo";
				
				?>
	

	</section>
		<!--  -->	

	
	<footer class="pie-pagina"> </footer>