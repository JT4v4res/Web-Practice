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
			$in=isset($_GET["st"])?$_GET["st"]:1;
			$fi=isset($_GET["end"])?$_GET["end"]:1;
			if ($in > $fi) {
				echo "$in...";
				while ($in > $fi) {
					$s=$in-1;
					$in-=1;
					echo "$s...<br/>";
				}
			}
			else{
				echo "$in...";
				while ($fi > $in) {
					$s=$in+1;
					$in+=1;
					echo "$s...<br/>";
				}
			}
		?>
		<a href="contageminteligente.html" class="botao">Voltar</a>
	</div>
</body>
</html>