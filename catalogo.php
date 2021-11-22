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


<?php

if(isset($_GET['clave']))
{
    switch($_GET['clave'])
    {
        case 'prod1':
            $titulo = 'Producto 1';
            $precio = '$345,00';
            $caracteristicas = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
            $imagen = 'prod1.jpg';
            break;

        case 'prod2':
            $titulo = 'Producto 2';
            $precio = '$500,00';
            $caracteristicas = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
            $imagen = 'prod2.jpg';
            break;

        case 'prod3':
            $titulo = 'Producto 3';
            $precio = '$1367,00';
            $caracteristicas = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
            $imagen = 'prod3.jpg';
            break;
    }

    ?>


            <article id="contenedor2">
				<article id="catalogo">
                <p>
					<hgroup>
						<h3>
                            Nombre Producto: 
						</h3>
						<h2>
							<?php echo $titulo; ?>
                        </h2>

						<h3>
							Precio:
						</h3>
							<?php echo $precio; ?>

						<h3>
							Caracteristicas:
						</h3>

					</hgroup>

						<?php echo $caracteristicas ?>
						
						</br>

						<h3>
							Imagen del Pructo:
						</h3>

						</br>

						<img src = "imagenes/<?php echo $imagen; ?>" width=" 20%">
			</article>
<?php
}
else
{
    echo "<h3> Seleccione boton </h3>";
}
?>

			</article>
		</article>

	</section>
	<?php
	include("footer.php");
	?>
</body>

</html>