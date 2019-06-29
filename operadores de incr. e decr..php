<!DOCTYPE html>
<html lang=>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div>
		<?php 
			/* esse exercicio pretende demonstrar o uso de 
			operadores de incremento e decremento */
			$atual = $_GET["aa"];
			echo "<br/>O ano atual e $atual e o ano anterior e ". --$atual;
			// Pré incremento //
			$atual = $atual + 1; // ++$atual
			// Pós incremento //
			$atual = $atual + 1; // $atual++
			// Pré decremento //
			$atual = $atual - 1; // --$atual
			// Pós decremento //
			$atual = $atual - 1; // $atual--

		?>
	</div>
</body>
</html>