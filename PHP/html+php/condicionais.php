<!DOCTYPE html>
<html>
<head>
	<?php 
		$ano = isset($_GET["ano"]) ? $_GET["ano"]: 1900;
		$idade = date("Y")-$ano;

	?>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estiloo.css" media="screen" />
</head>
<body>
	<div>
	<?php 
		echo "você nasceu em $ano, tem $idade anos";

		if ($idade <16){
			$pode = "não pode";
		}
		elseif (($idade>=16 && $idade<18) || ($idade >=65)) {
			$pode = "pode opcionalmente";
		}
		else {
			$pode = "pode";
		}

		echo "<br> $pode votar";

	?>
	<br>
	<a href="condicionais.html">Voltar</a>
	</div>
</body>
</html>
