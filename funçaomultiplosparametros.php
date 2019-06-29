<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<?php
			function soma(){
				$p=func_get_args();
				$tot=func_num_args();
				$s=0;
				for ($i=0; $i < $tot; $i++) { 
					$s+=$p[$i];
				}
				return$s;
			}

			$res=soma(3,5,2,10,2,6,7,3,9,5);
			echo "A soma dos valores é $res";
		?>
	</div>
</body>
</html>