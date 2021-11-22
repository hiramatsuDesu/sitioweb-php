<!DOCTYPE html>

<html>

	<head>
		
		<title>maqueta</title>
		<link href="estilo.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

<body background="imagenes/fondo.jpg" no-repeat>
	<section id="cuerpo">
	<?php 
		include ("header.php"); 
		include ("grilla.php")
	?>

		
		<article id="principal">
			<p>
				<h3>
					Nuestros Valores
				</h3>
			</p>

			<article id="contenedor2">
				<article id="columna2">
					<p>
						<h4>
							Nuestra Misión
						</h4>
					</p>
				
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis sint odio ipsam similique deleniti consectetur iusto id sit laborum facere vero quia velit, rerum soluta suscipit placeat sed provident. Illum!
					</p>
				</article>


				<article id="columna2">
					<p>
						<h4>
							Nuestra Visión.
						</h4>
					</p>
				
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod quasi porro, laboriosam perferendis repellat, voluptatum unde adipisci, provident ab rem tempore dolor fuga repudiandae. Quas ipsa cumque natus modi error!
					</p>
				</article>

				<article id="columna3">
					<p>
						<h4>
							Un poco de nuestra historia
						</h4>
					</p>
					
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit iusto, autem dolores quibusdam cum molestiae aliquid veritatis illum, rerum aspernatur a eius quis alias possimus praesentium molestias, repudiandae sapiente accusamus!
					</p>
				</article>
			</article>
		</article>

	</section>
	<?php
	include("footer.php");
	?>
</body>

</html>