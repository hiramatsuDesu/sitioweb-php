<!DOCTYPE html>

<html>

	<head>
		<title>maqueta</title>
		<meta charset="utf-8"/>
		<link href="estilo.css" rel="stylesheet"/>
	</head>

<body background="imagenes/fondo.jpg" no-repeat>
	<section id="cuerpo">
		<?php 
		include ("header.php"); 
		include ("grilla.php")
		?>

		

		<form method="POST" action="enviar.php">
			<div>
				<label for="nombre">
					Nombre:
				</label>

				<input id="nom" type="text" name="nom" require required mt_getrandmax="50"/>
			</div>

			<div>
				<label for="mail">
					E-mail:
				</label>

				<input id="correo" type="email" name="correo" required required maxlength="100">
			</div>

			<div>
				<label for="msg">
					Mensaje:
				</label>

				<textarea id="msg" name="msg" placeholder= "Dejenos su mensaje" required></textarea>
			</div>

			<p>
				<button type="submit">
					<input id ="submit" type="submit" name="submit" value="Enviar">
				</button>
			</p>

			<?php
				if(isset($_GET['ok']))
				{
					echo "Su consulta ha sido enviada";
				}

			?>

			

		</form>
		

	</section>
	<?php
	include("footer.php");
	?>
</body>

</html>