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
			// Variáveis normais
			$a = 3;
			$b = $a;
			$b += 5;
			echo "<br/>O valor de a e $a e o valor de b e $b";
			// Variáveis ligadas por referência
			$a = 3;
			$b = &$a;
			$b += 5;
			echo "<br/>O valor de a e $a e o valor de b e $b";
			// O & serve para ligar as variáveis por referência 

			// Variáveis variantes
			$site = "cursoemvideo";
			// A variável com um cifrão adicional é a variável variante
			$$site = "cursoPHP";
			echo "<br/> O conteudo da variável site e $site";
			echo "<br/> O conteudo da variável variante e $cursoemvideo";
		?>
	</div>
</body>
</html>