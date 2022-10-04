<!DOCTYPE html>
<html>
<head>
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
	<meta charset="UTF-8">
	<title>operacoes aritmeticas</title>
</head>
<body>
	<div>
	<?php 
		echo "<h1 id='titulo'>Operações</h1>";
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$resu = $n1 + $n2;

		echo "<h2>Os número escolhidos foram $n1 e $n2</h2>";
		echo "o resultado é $resu";
		echo "<br>e o valor absoluto do resultado é ".abs($resu);
		echo "<br>o valor de $n1 <sup>$n2</sup> é ".pow($n1,$n2);
		echo "<br>a raiz quadrada de $n1 é ".sqrt($n1);
		echo "<br>o valor arrendondado de $n2 é ".round($n2);
		echo "<br>a parte inteira de $n2 é ".intval($n2);
		echo "<br> o valor de $n1 em formato de moeda é R$ ".number_format($n1,2,",");

	?>
	</div>
</body>
</html>
