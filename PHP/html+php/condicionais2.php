<!DOCTYPE html>
<html>
<head>
	<?php 
		$n1 = isset($_GET["n1"]) ? $_GET["n1"]: 0;
		$n2 = isset($_GET["n2"]) ? $_GET["n2"]: 0;
		$media = ($n1 + $n2)/2;

	?>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estiloo.css" media="screen" />
</head>
<body>
	<div>
	<?php 
		echo "Sua primeira nota foi $n1 e a segunda $n2<br>";
		echo "media: $media<br>";
		if($media >7){
			$situ = "aprovado";
		}
		elseif($media >=5 and $media<6) {
			$situ = "esta de recuperação";
		}else {
			$situ = "REPROVADO";
		}

		echo "Situação:<br>";
		echo "<span>$situ</span>";

	?>
	<br>
	<a href="condicionais2.html">Voltar</a>
	</div>
</body>
</html>
