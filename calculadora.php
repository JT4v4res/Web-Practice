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
			$v1=isset($_GET["v1"])?$_GET["v1"]:1;
			$v2=isset($_GET["v2"])?$_GET["v2"]:1;
			$op=isset($_GET["op"])?$_GET["op"]:1;
			switch ($op) {
				case '1':
					$r=$v1+$v2;
					echo "O valor da soma foi $r";
					break;
				case '2':
					$r=$v1-$v2;
					echo "O valor da subtração foi $r";
					break;
				case '3':
					$r=$v1*$v2;
					echo "O valor da multiplicação foi $r";
					break;
				case '4':
					$r=$v1/$v2;
					echo "O valor da divisão foi $r";
					break;
				case '5':
					$r=$v1^$v2;
					echo "O valor da potenciação foi $r";
					break;
				case '6':
					$r=sqrt($v1);
					$r2=sqrt($v2);
					echo "A raiz quadrada dos valores informados é $r,  $r2";
					break;
			}
		?>
		<a href="calculadora.html" class="botao">Voltar</a>
	</div>
</body>
</html>