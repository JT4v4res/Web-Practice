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
			$est=isset($_GET["est"])?$_GET["est"]:"erro";
			switch ($est) {
				case '1':
				case '4':
				case '3':
				case '14':
				case '22':
				case '23':
				case '27':
					echo "<br/>Você mora na <span class='foco'>Região Norte</span>";
					break;
				case '2':
				case '5':
				case '6':
				case '10':
				case '15':
				case '17':
				case '18':
				case '20':
				case '26':
					echo "<br/>Você mora na <span class='foco'>Região Nordeste</span>";
					break;
				case '7':
				case '9':
				case '11':
				case '12':
					echo "<br/>Você mora na <span class='foco'>Região Centro-Oeste</span>";
					break;
				case '8':
				case '13':
				case '19':
				case '25':
					echo "<br/>Você mora na <span class='foco'>Região Sudeste</span>";
					break;
				case '16':
				case '21':
				case '24':
					echo "<br/>Você mora na <span class='foco'>Região Sul</span>";
					break;
			}
		?>
		<br/><a href="index.html" class="botao">Retornar</a>
	</div>
</body>
</html>