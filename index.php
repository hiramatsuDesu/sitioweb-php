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
		include("grilla.php");
	?>

	<article id="principal">
		<p>
			<h3>
				Nuestros productos
			</h3>
		</p>

		<article id="contenedor2">
				<article id="columna1">
					<p>
						<ul class="menu">
							<li>
								<h3><a href="catalogo.php?clave=prod1">
									Producto 1
								</a></h3>
							</li>
						</ul>
					</p>
					
					<p>
						Haz click en <strong> Producto </strong> para obtener mas detalles
					</p>

					<p>
						
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae iste error cum alias blanditiis, reprehenderit laboriosam a odio est saepe quis voluptatum voluptates rerum corrupti omnis ad, voluptatem repellat tempora?
					
					</p>


					<p>

						<figure>
							<img src = "imagenes/prod1.jpg" width="80%"/> 
						</figure>
						<figurecaption> Nombre del Producto </figurecaption>

					</p>

			</article>


			<article id="columna1">
				<p>
					<ul class="menu">
						<li>
							<h3><a href="catalogo.php?clave=prod2">
								Producto 2
							</h3></a>
						</li>
					</ul>
				</p>
					
				<p>
					Haz click en <b> Producto </b> para obtener mas detalles
				</p>

				<p>
						
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae iste error cum alias blanditiis, reprehenderit laboriosam a odio est saepe quis voluptatum voluptates rerum corrupti omnis ad, voluptatem repellat tempora?
					
				</p>

				<p>

					<figure>
						<img src = "imagenes/prod1.jpg" width="80%"/> 
					</figure>
					<figurecaption> Nombre del Producto </figurecaption>

				</p>

			</article>

			<article id="columna1">
				<p>
					<ul class="menu">
						<li>
							<h3><a href="catalogo.php?clave=prod3">
								Producto 3
							</h3></a>
						</li>
					</ul>
				</p>
						
				<p>
					Haz click en <b> Producto </b> para obtener mas detalles
				</p>

				<p>
						
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae iste error cum alias blanditiis, reprehenderit laboriosam a odio est saepe quis voluptatum voluptates rerum corrupti omnis ad, voluptatem repellat tempora?
					
				</p>

				<p>

					<figure>
						<img src = "imagenes/prod1.jpg" width="80%"/> 
					</figure>
					<figurecaption> Nombre del Producto </figurecaption>

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