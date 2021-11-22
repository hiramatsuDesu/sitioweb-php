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

		

		<article id="principal">

            <p>
                <h3>
                    Nuestros productos
                </h3>
            </p>

                <article id="contenedor2">
                    <h3> 
                        Si no estas registrado pulsa el boton para registrarte 

                    </h3>
                    
                    <button>
                        <a href="registro.php">Registro</a>
                    </button>


                </article>

                <article id="contenedor2">
                    <h3> 
                        Si ya estas registrado ingresa con tu usuario y clave generadas 

                    </h3>
                    
                    <button>
                        <a href="sesion.php">Inicio de Sesion</a>
                    </button>


                </article>
        </article>
		

	</section>
	<?php
	include("footer.php");
	?>
</body>

</html>