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
			// Função que não retorna valor
			function soma($a,$b){
				$s=$a+$b;
				echo "A soma vale: $s ";
			}
			soma(57010,43090);

			// Função que retorna valor
			function soma($a,$b){
				$s=$a+$b;
				return($s);
			}
			$res=soma(57010,43090);
			echo "A soma vale $res";
		?>
	</div>
</body>
</html>