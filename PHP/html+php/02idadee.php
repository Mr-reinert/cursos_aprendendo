<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div>
	<?php 
		$nome = isset($_GET["nome"])?$_GET["nome"] : "[não informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"] :0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";

		$idade= date("Y") - $ano;

		echo "$nome é $sexo e tem $idade anos";

	?>
	<br>
	<a href="escolhecor.html">Voltar</a>
	</div>
</body>
</html>
