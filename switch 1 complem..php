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
			$n=isset($_GET["num"])?$_GET["num"]:0;
			$o=isset($_GET["oper"])?$_GET["oper"]:1;
			// estrutura condicional "switch"
			switch ($o) {
				case '1':
					$r=$n*2;
					break;
				case '2':
					$r=$n^3;
					break;
				case '3':
					$r=sqrt($n);
			}
			echo "<br/>O resultado da operação solicitada foi <span class='foco'>$r</span>";
		?>
		<br/><a class="botao" href="index.html">Voltar</a>
	</div>
</body>
</html>