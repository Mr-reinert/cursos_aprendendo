<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style>
		html {
			background-color: #e2e2e260;
			font-family: Arial, Helvetica, sans-serif;
			text-align: justify;
			margin-left: 50px;
			font-size: 15pt;
		}
		h1 {
			background-color: #6b6b6b60;
			padding: 50px;
			text-align: center;
			margin-left: -120px;
			margin-right: -100px;
			margin-top: -20px;
		}
		h1#titulo {
			color: black;
			font-weight: bold;
		}
		h2 {
			padding: 10px;
			position: relative;
			text-align: left;
			margin-left: -50px;
		}
	</style>
	<title>variaveis</title>
</head>
<body>
	<?php 
		$produto = $_GET["a"];
		$percent = 10;

		echo "o preço do produto é R$".number_format($produto,2,",");
		$produto += $produto*$percent/100;

		echo "<br>com aumento de 10% o produto ficou com preço de R$".number_format($produto,2,",");
	?>
</body>
</html>
