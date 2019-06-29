<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title></title>
</head>
<body>
	<div>
		<?php
			
			$c=isset($c);
			$i=1;
			while ($i <= 15) {
				$s="sex$c".$i;
				$lk="like$c".$i;
				$like[]=isset($_GET["$lk"])?$_GET["$lk"]:"erro";
				$sex[]=isset($_GET["$s"])?$_GET["$s"]:"erro";
				
				$i++;
			}
			
			$d=0;
			$felk=0;
			$fedk=0;
			$maslk=0;
			$masdk=0;
			while ($d <= 14) {
				if ($sex[$d]=="mulher" and $like[$d]=="sim") {
					$felk++;
				}
				elseif ($sex[$d]=="mulher" and $like[$d]=="não") {
					$fedk++;
				}
				if ($sex[$d]=="homem" and $like[$d]=="sim") {
					$maslk++;
				}
				elseif ($sex[$d]=="homem" and $like[$d]=="não") {
					$masdk++;
				}
				$d++;
			}

			$mulheres=$felk+$fedk;
			$homens=$masdk+$maslk;
			$plk=$felk+$maslk;
			$pdk=$fedk+$masdk;
			$prflk=($felk/$plk);
			$prmdk=($masdk/$pdk);;
			$rflk=$prflk*100;
			$rmdk=$prmdk*100;
			echo "<br/>O número de pessoas que gostaram foi: $plk";
			echo "<br/>O número de pessoas que não gostaram foi: $pdk";
			echo "<br/>A porcentagem de mulheres que gostaram é de: ".number_format($rflk,2)."%";
			echo "<br/>A porcentagem de homens que não gostaram é de: ".number_format($rmdk,2)."%";
		?>
		<br/><a href="pesquisador.php" class="botao">Voltar</a>
	</div>
</body>
</html>