<!DOCTYPE html>
<html>
<head>
	<?php
		$txt=isset($_GET["t"])?$_GET["t"]:"Texto generioco";
		$tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#0000000";
	?>
	<style>
		html {
			font-family: Arial, sans-serif;
		}
		span.texto {
			color : <?php echo $cor; ?>;
			font-size :<?php echo $tamanho; ?>;
		}
	</style>
	<meta charset="UTF-8">
</head>
<body>
	<div>
	<?php 
		echo "<span class='texto'>$txt</span>";

	?>
	<br>
	<a href="formulario.html">Voltar</a>
	</div>
</body>
</html>
