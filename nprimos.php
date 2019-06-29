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
			$ToTdiv=0;
			$n=isset($_GET["val"])?$_GET["val"]:1;
			echo "<br/><h2>Analisando o número $n</h2>";
			echo "<br/>Valores multiplos: ";
			for ($i=1; $i <= $n; $i++) {
				if ($n%$i==0) {
				 	echo "$i ";
				 	$ToTdiv++;
				} 	
			}
			if ($ToTdiv <= 2) {
				echo "<br/>O número $n é primo";
			} else {
					echo "<br/>O número $n não é primo";
			}
			echo "<br/>Total de múltiplos: $ToTdiv";
		?>
		<br/><a href="numerosprimos.html" class="botao">voltar</a>
	</div>
</body>
</html>