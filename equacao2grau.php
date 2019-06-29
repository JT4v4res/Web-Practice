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
			$a=isset($_GET["1"])?$_GET["1"]:1;
			$b=isset($_GET["2"])?$_GET["2"]:1;
			$c=isset($_GET["3"])?$_GET["3"]:1;
			$delta= (pow($b, 2)) - (4 * $a * $c);
			$raiz=sqrt($delta);
			if ($delta > 0) {
				$x=(-$b + $raiz) / (2 * $a);
				$x2=(-$b - $raiz) / (2 * $a);
				echo "As raizes encontradas foram $x e $x2<br/>";
				echo "A equação possui 2 raizes e seu delta é $delta<br/>";
				echo "A raiz de delta é $raiz<br/>";
			}
			elseif ($delta == 0) {
				$x=(-$b + $raiz) / (2 * $a);
				$x2=(-$b - $raiz) / (2 * $a);
				echo "As raizes encontradas foram $x e $x2<br/>";
				echo "A equação possui apenas 1 raiz pois seu delta é $delta<br/>";
				echo "A raiz de delta é $raiz<br/>";
			}
			else{
				echo "A equação não possui raiz real";
			}
			
		?>
		<br/><a href="2graueq.html" class="botao">Voltar</a>
	</div>
</body>
</html>