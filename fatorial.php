<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<div>
		<?php
			$v=isset($_GET["val"])?$_GET["val"]:1;
			echo "<h1>Calculando o fatorial de <span class='foco'>$v</span></h1>";
			$c=$v;
			$fat=1; 
			do {
				$fat=$fat*$c;
				$c--;
			} while ($c >= 1);
			echo "<h2>$v ! = $fat</h2>";
		?>
		<a href="fatorial.html" class="botao">Voltar</a>
	</div>
</body>
</html>