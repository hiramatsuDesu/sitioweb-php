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

		

	    <div id="principal">
			<p>
				<h3>
					Noticias
				</h3>
			</p>

			<div id="contenedor2">
				
            <?php
                $noticias = array (

                    array('Lorem Ipsum',
                    'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 
                    'imagen1.jpg'),

                    array('What is Lorem Ipsum?',
                    'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 
                    'imagen2.png'),

                    array('Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..',
                    'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 
                    'imagen3.png')

                );

            ?>

            <?php
                $longitud = count($noticias);

                for($i=0; $i<$longitud; $i++)
                {
            ?>
                    <section class="journal">
                        <p>
                            <img src="imagenes/<?php echo $noticias [$i][2]; ?>" width="10%">
                            <h4>
                                <?php echo $noticias [$i][0]; ?> 
                            </h4>
                        </p>
                        <p>
                            <?php echo $noticias[$i] [1]; ?>
                        </p>
                </section>

            <?php
                }
            
            ?>
				
			</div>
        </div>

	</section>

    
	<?php
	include("footer.php");
	?>

</body>

</html>