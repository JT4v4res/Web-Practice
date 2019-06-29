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
			$c=$_GET["v1"];
			$c2=$_GET["v2"];
			$c3=$_GET["v3"];
			while ($c <= $c2) {
				echo " $c ";
				$c+=$c3;
			}
			while ($c >= $c2) {
				echo " $c ";
				$c-=$c3;
			}
			
			
			
		?>
		<br/><a href="contadorform.html" class="botao">Voltar</a>
	</div>
</body>
</html>