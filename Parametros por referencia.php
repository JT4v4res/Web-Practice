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
			// & usado para passagem de valores por referência 
			function teste(&$x){
				$x+=2;
				echo "<br/>O valor de x é $x";
			}
			$a=3;
			teste($a);
			echo "<br/>O valor de a é $a";
		?>
	</div>
</body>
</html>