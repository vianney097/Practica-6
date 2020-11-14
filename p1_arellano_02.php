<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 1 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/Ejercicio1" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio1.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p>
					
						Este codigo se trato principalmente de ver <br>
						los resultados acerca de los operadores logicos <br>
						asi como su compartamiento dependiendo el caso <br>
						del valor de las variables que se esten utilizando <br>
						y cual seria el resultado en pantalla para el usuario <br>
						de estas.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>