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
			$nome=$_GET["nome"];
			$ano=$_GET["ano"];
			$sexo=$_GET["sexo"];
			$idade=date("Y")-$ano;
			echo "<br/>$nome e $sexo e tem $idade anos";
		?>
		<!-- Inserção do botão voltar utilizando hyperlinks -->
		<a href="index.html">Voltar</a>
	</div>
</body>
</html>