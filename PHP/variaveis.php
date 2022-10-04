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
		echo "<h1 id='titulo'>Variáveis</h1>";
		echo "<h2>ex...</h2>";

		$string = "não tem muito segredo na hora de aprender variáveis";
		$n1 = 4;
		$n2 = 4.76594;
		$n3 = -1;
		$logic = false; 

		echo "<p>$string, n1 é: $n1, n2 é: $n2, n3 é: $n3</p>";
	?>
</body>
</html>
