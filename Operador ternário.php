<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div>
		<?php
			$a = 3;
			$b = "3";
			// Operador ternário, semelhante ao "se" no visualg
			$r=($a===$b)?"sim":"nao";
			echo "<br/>as variaveis a e b sao iguais? $r";			
		?>
	</div>
</body>
</html>