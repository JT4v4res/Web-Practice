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
			$nome = $_GET["nome"];
			$nasc = $_GET["ano"];
			$idade = date("Y")-$nasc;
			echo "<br/>$nome nasceu em $nasc e tem $idade anos";
			if ($idade < 16) {
				echo "<br/>$nome não pode votar";
			}
			else {
				if (($idade <= 18 and $idade >= 16 ) or ($idade > 65)) {
					
					echo "<br/>$nome tem voto opcional";
				}
				else{
					echo "<br/>$nome tem voto obrigatório";
				}
			}
		?>
		<br/><a href="index.html">Voltar</a>
	</div>
</body>
</html>