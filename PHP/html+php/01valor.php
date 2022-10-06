
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div>
	<?php 
		$valor = $_GET["v"];
		$ra = sqrt($valor);

		echo "<br>a raiz quadrada do número $valor raiz quadrada é ".number_format($ra,2);	
	?>
	<br>
	<a href="index.html">Voltar</a>
	</div>
</body>
</html>