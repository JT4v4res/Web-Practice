<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>	</title>
</head>
<body>
	<div>
		<?php
			$i=1;
			$c=isset($c);
			while ($i <= 10) {
				$url="v$c".$i;
				$n[]=isset($_GET["$url"])?$_GET["$url"]:0;
				$i++;
			}
			sort($n);
			$d=0;
			while ($d <= 9) {
				echo " $n[$d] ";
				$d++;
			}
		?>
		<br/><a href="ordenavalor.php" class="botao">Voltar</a>
	</div>
</body>
</html>