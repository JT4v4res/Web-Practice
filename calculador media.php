<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style type="text/css">
		span.texto{
			font-size: 12pt;
			color: #DC143C;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div>
		<?php
			$n=$_GET["n1"];
			$n2=$_GET["n2"];
			$media=($n+$n2)/2;
			// estrutura condicional if 
			if ($media >= 7) {
				echo "<br/>A média entre <span class='texto'>$n</span> e <span class='texto'>$n2</span> é <span class='texto'>$media</span>";
				echo "<br/>A situação do aluno é:<span class='texto'>APROVADO</span>";
			}
			elseif ($media >= 5 and $media < 7) {
				echo "<br/>A média entre <span class='texto'>$n</span> e <span class='texto'>$n2</span> é <span class='texto'>$media</span>";
				echo "<br/>A situação do aluno é:<span class='texto'>EM RECUPERAÇÂO</span>";
			}
			else{
				echo "<br/>A media entre <span class='texto'>$n</span> e <span class='texto'>$n2</span> é <span class='texto'>$media</span>";
				echo "<br/>A situação do aluno é:<span class='texto'>REPROVADO</span>";
			}
		?>
		<br/><a href="index.html">Voltar</a>
	</div>
</body>
</html>