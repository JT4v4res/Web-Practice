<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<div>
		<form method="get" action="formwhile2.php">
			<?php
			$c = 1;
			while ($c <= 5) {
				echo "Valor $c:<input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
				$c++;
			}
			?>
			<input type="submit" name="Enviar" class="botao">
		</form>
	</div>
</body>
</html>