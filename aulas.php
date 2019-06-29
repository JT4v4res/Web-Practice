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
			$d=isset($_GET["ds"])?$_GET["ds"]:0;
			switch ($d) {
				case '2':
				case '3':
				case '4':
				case '5':
				case '6':
					echo "<br/>Levanta e vai estudar!";
					break;
				case '7':
				case '8':
					echo "<br/>Descanse pequeno gafanhoto! ;)";
					break;
				default:
					echo "<br/>Dia da semana invalido!";
			}

		?>
		<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>