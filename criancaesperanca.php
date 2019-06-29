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
			$nome=isset($_GET["nome"])?$_GET["nome"]:"erro";
			$v=isset($_GET["valor"])?$_GET["valor"]:"erro";
			switch ($v) {
				case '1':
					$r=10;
					break;
				case '2':
					$r=25;
					break;
				case '3':
					$r=50;
					break;
			}
			echo "Olá $nome!<br/>";
			echo "Sua doação foi de R$". $r."<br/>";
			echo "Muito Obrigado!";
		?>
		<a href="criancaesperança.html" class="botao">Voltar</a>
	</div>
</body>
</html>