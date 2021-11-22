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

                <form method = "POST" action = "ingresar_usuario.php">

                    <input id="us" type="text" name="us" placeholder="Ingrese usuario" required required maxlength="6">
                        
                    <input id="cl" type="text" name="cl" placeholder="Ingreses clave" required required maxlength ="6">

                    <input id="submit" type="submit" name="Enviar" value="Ingresar">

					</br>

					<p>

                    <?php

                        if(isset($_GET['si']))
                        {
                            echo "Usuario aceptado.";
                        }
                        elseif(isset($_GET['no']))
                        {
                            echo "El usuario no ha podido ser validado";
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