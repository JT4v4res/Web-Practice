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
			for ($i=1; $i <= 10 ; $i++) { 
				echo "$i ";
			}
			echo "<br/>";
			for ($i=10; $i >= 1 ; $i--) { 
				echo "$i ";
			}
			echo "<br/>";
			for ($i=0; $i <= 50; $i+=5) { 
				echo "$i ";
			}
			echo "<br/>";
			for ($i=50; $i >= 1; $i-=5) { 
				echo "$i ";
			}
			echo "<br/>";
			for ($i=20; $i >= 1 ; $i-=2) { 
				echo "$i ";
			}
		?>
	</div>
</body>
</html>