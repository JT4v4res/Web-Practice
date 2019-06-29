<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<div>
		<form method="get" action="fortabuada2.php">
			<select name="tab">
				<?php
					for ($i=1; $i <= 10; $i++) { 
						echo "<option>$i</option>";
					}
				?>
			</select>
			<input type="submit" name="enviar" class="botao"/>
		</form>
	</div>
</body>
</html>