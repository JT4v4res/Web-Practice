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
			function soma($a, $b){
				$s=$a+$b;
				return$s;
			}

			$x=3;
			$y=4;
			$r=soma($x, $y);
			echo "A soma entre $x e $y é igual a $r";
		?>
	</div>
</body>
</html>