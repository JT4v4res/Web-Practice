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
			$n=isset($_GET["tab"])?$_GET["tab"]:1;
			for ($i=1; $i < 10 ; $i++) { 
				$r=$n*$i;
				echo "<br/>$n x $i = $r";
			}
		?>
		<br/><a href="fortabuada.php" class="botao">Voltar</a>
	</div>
</body>
</html>