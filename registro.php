<!DOCTYPE html>

<html>

	<head>
	
		<title>maqueta</title>
		<link href="estilo.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

<body>
	<section id="cuerpo">
		
	<?php 
		include ("header.php"); 
		include ("grilla.php")
	?>

		

		<article id="principal">
			<p>
				<h3>
					Registrate 
				</h3>
			</p>

			<article id="contenedor2">
			<h3>Formulario de Registro</h3>

                <div id="form_registro">

                <form method = "POST" action = "insertar_usuario.php">

                    <input id="usuario" type="text" name="usuario" placeholder="Genere Usuario de 6 digitos" required required maxlength="6">
                        
                    <input id="clave" type="text" name="clave" placeholder="Genere Clave de 6 digitos" required required maxlength ="6">

                    <input id="nombre" type="text" name="nombre" placeholder ="Ingrese Nombre" required required maxlength="30">

                    <input id="apellido" type="text" name="apellido" placeholder="Ingrese Apellido" required required maxlength="30">

                    <input id="edad" type="int" name="edad" placeholder="Edad">

                    <input id="mail" type="email" 
                    nombre="mail" placeholder="Ingrese E-mail">

                    <input id="sitio_web" type="web" name="sitio_web" placeholder="Ingrese sitio web si posee">

                    <input id="submit" type="submit" name="submit" value="Enviar">

                    <p>
                    <?php

                    if(isset($_GET['ok']))
                    {
                        echo "Datos recibidos. Gracias por registrarte";
                    }

                    ?>
                    </p>
                </form>
                </div>

			</article>


           



		</article>

	</section>
	<?php
	include("footer.php");
	?>
</body>

</html>