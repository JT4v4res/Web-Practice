<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div>
		<?php
			$valor = $_GET["v"];
			echo "<br/>O valor enviado foi $valor";
			$r = sqrt($valor);
			echo "<br/>O valor da raiz quadrada é ". number_format($r,2);
		?>
		<!-- Inserção de um botão para retornar ao arquivo html -->
		<a href="index.html">Voltar</a>
	</div>
</body>
</html>