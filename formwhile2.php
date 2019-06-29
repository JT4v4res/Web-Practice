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
			$i=1;
			$c=1;
			while ($i <= 5) {
				$v="num".$i;
				$url="v$c".$i;
				$$v=isset($_GET["$url"])?$_GET["$url"]:0;
				$i++;
			}

			$i=1;
			while ($i <= 5) {
				$v="num".$i;
				echo "Valor $i : ". $$v. "<br/>" ;
				$i++;
			}
		?>
	</div>
</body>
</html>