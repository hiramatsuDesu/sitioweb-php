<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--bootstrap -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>maqueta</title>
		<link href="estilo.css" rel="stylesheet"/>

	</head>

<body background="imagenes/fondo.jpg" no-repeat>
	<section id="cuerpo">
    <?php
	 	include ("header.php");
	?>

		
		<article id="principal">
			<p>
				<h3>
					Actividades
				</h3>
			</p>

			<article id="contenedor2">
				
            <div id="meca">
				<p>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid placeat voluptates enim. Consequatur adipisci iusto suscipit in voluptates accusamus aut, quod nemo maxime soluta similique eum eligendi deserunt, non ut?
                </p>

            <div id="demo" class="carousel slide" data-ride="carousel">

                
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure id="carrosel">
                            <img src="imagenes/prod1.jpg" alt="Prod 1" width="100%"/>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid placeat voluptates enim. Consequatur adipisci iusto suscipit in voluptates accusamus aut, quod nemo maxime soluta similique eum eligendi deserunt, non ut?
                            <p>
                        </figure>
                        
                            
                    </div>

                    <div class="carousel-item">
                        <figure id="carrosel">
                        <img src="imagenes/prod2.jpg" alt="Prod2" width="100%">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid placeat voluptates enim. Consequatur adipisci iusto suscipit in voluptates accusamus aut, quod nemo maxime soluta similique eum eligendi deserunt, non ut?
                            <p>
                        </figure>
                        
                    </div>


                    <div class="carousel-item">
                        <figure id="carrosel">
                            <img src="imagenes/prod3.jpg" alt="Prod 3" width="100%">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid placeat voluptates enim. Consequatur adipisci iusto suscipit in voluptates accusamus aut, quod nemo maxime soluta similique eum eligendi deserunt, non ut?
                            <p>
                        </figure>
                    </div>
                
                </div>

                
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>

            </div>
				
			

        </div>

                
				
		</article>
		</article>

	</section>
	<?php
    include("footer.php");
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>


</body>

</html>