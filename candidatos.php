<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<?php
			$voto=isset($_GET["part"])?$_GET["part"]:1;
			switch ($voto) {
				case '12':
					$n="Ciro Gomes";
					$num=12;
					$p="PDT - Partido Democrático Trabalhista";
					echo "<span class='foco'>Seu candidato é: $n</span><br/>";
					echo "<span class='foco'>Seu número é: $num</span><br/>";
					echo "<span class='foco'>Seu partido é: $p</span><br/>";
					break;
				case '13':
					$n="Fernando Haddad";
					$num=13;
					$p="PT - Partido dos Trabalhadores";
					echo "<span class='foco'>Seu candidato é: $n</span><br/>";
					echo "<span class='foco'>Seu número é: $num</span><br/>";
					echo "<span class='foco'>Seu partido é: $p</span><br/>";
					break;
				case '17':
					$n="Jair Bolsonaro";
					$num=17;
					$p="PSL - Partido Social Liberal";
					echo "<span class='foco'>Seu candidato é: $n</span><br/>";
					echo "<span class='foco'>Seu número é: $num</span><br/>";
					echo "<span class='foco'>Seu partido é: $p</span><br/>";
				case '30':
					$n="João Amoêdo";
					$num=30;
					$p="NOVO - Partido NOVO";
					echo "<span class='foco'>Seu candidato é: $n</span><br/>";
					echo "<span class='foco'>Seu número é: $num</span><br/>";
					echo "<span class='foco'>Seu partido é: $p</span><br/>";
					break;
				case '51':
					$n="Cabo Daciolo";
					$num=51;
					$p="PATRIOTA";
					echo "<span class='foco'>Seu candidato é: $n</span><br/>";
					echo "<span class='foco'>Seu número é: $num</span><br/>";
					echo "<span class='foco'>Seu partido é: $p</span><br/>";
					break;
					break;
				default:
					echo "Candidato invalido<br/>";
					break;
			}
		?>
		<a href="urna.html">Voltar</a>
	</div>
</body>
</html>