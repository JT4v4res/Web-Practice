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
			$ano = $_GET["an"];
			$idade = 2019 - $ano;
			echo "<br/>Quem nasceu em $ano tem idade de $idade anos";
			// Operador lógico "and" apenas premissas iguais darão verdadeiro
			$tipo = ($idade >= 18 and $idade <= 65)?"obrigatório":"não obrigatorio";
			echo "<br/>$tipo";
		?>
	</div>
</body>
</html>