<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<form method="get" action="ordenador.php">  
			<?php
				$c=1;
				while ($c <= 10) {
					echo "Valor $c:<input type='number' name='v$c' /><br/>";
					$c++;
				}
			?>
			<input type="submit" name="Enviar" class="botao">
		</form>
	</div>
</body>
</html>