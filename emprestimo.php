<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<style type="text/css">
		div.estetico{
			color: #483D8B;
			font-style: bold;
		}
	</style>
</head>
<body>
	<div class="estetico">
		<?php
			$v=isset($_GET["val"])?$_GET["val"]:1;
			$p=isset($_GET["par"])?$_GET["par"]:1;
			$t=isset($_GET["j"])?$_GET["j"]:1;
			$v2=($v+($v*$t)/100);
			$r=($v2/$p);
			echo "Você vai pagar $p parcelas de ". number_format($r,2). ", o valor do empréstimo com juros fica $v2 reais";
		?>
		<br/><a href="emprestimo.html" class="botao">Voltar</a>
	</div>
</body>
</html>