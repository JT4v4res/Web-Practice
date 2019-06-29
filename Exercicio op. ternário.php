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
			$nota1=$_GET["n1"];
			$nota2=$_GET["n2"];
			$m=($nota1+$nota2)/2;
			echo "<br/>A media entre $nota1 e $nota2 e $m";
			// O operador ternário pode ser escrito em concatenação
			echo "<br/>A situaçao do aluno e ". (($m<6)?"reprovado":"aprovado");
		?>
	</div>
</body>
</html>