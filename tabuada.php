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
			$v=isset($_GET["tab"])?$_GET["tab"]:1;
			$c=1;
			echo "<h2>Mostrando a tabuada de $v</h2>";
			do {
				$c2=$v*$c;
				echo "<br/>$v x $c = $c2";
				$c++;
			} while ($c <= 10);
		?>
		<br/><a href="tabuada.html" class="botao">Voltar</a>
	</div>
</body>
</html>