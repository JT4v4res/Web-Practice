<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<form method="get" action="pesquisa.php">
			<?php 
				$c=1;
				while ($c <= 15) {
					echo "<fieldset><lenged>Pessoa $c</legend>";
					echo "<br/>Você gostou do produto?<input type='text' name='like$c'/>";
					echo "<br/>Qual seu sexo?<input type='text' name='sex$c'/>";
					echo "</fieldset>";
					$c++;
				}
			?>
			<br/><input type="submit" name="Enviar" class="botao"/>
		</form>
	</div>
</body>
</html>