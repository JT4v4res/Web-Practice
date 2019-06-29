<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<body>
	<div>
		<pre>
		<?php
			// array cria uma variável composta
			$n=array(3,5,8,2);
			print_r($n);
			echo "<br/>";
			// range cria uma variável composta contendo uma faixa de elementos
			$n2=range(5,20,1);
			print_r($n2);
			echo "<br/>";
			// foreach iterar facilmente com arrays(estrutura de repetição com vetores)
			foreach ($n2 as $c => $v) {
				echo "<br/>$v";
			}
			echo "<br/>";
			echo "<br/>";
			$v2=array(0=>5,
					  1=>9,
					  2=>8,
					  3=>7);
			unset($v2[0]);
			print_r($v2);

			// vetores em php não são homogêneos 
			echo "<br/>";
			$v3=array("nome"=> "Ana",
					  "idade"=>23,
					  "peso"=>65.5);
			foreach ($v3 as $c => $n3) {
				echo "<br/>O campo $c possui o conteudo $n3";
			}
			echo "<br/>";
			echo "<br/>";

			// matrizes são criadas usando arrays dentro de arrays
			$m=array(array(6,4),
					 array(4,9),
					 array(3,2));
			print_r($m);
			echo "<br/>";
			echo "<br/>";

			// var_dump mostra informações sobre a variável, count conta quanto elementos possui o array
			$v4=array("A","J","M","X","K");
			echo "O vetor tem ". count($v4). " elementos<br/><br/>";
			print_r($v4);
			var_dump($v4);
			echo "<br/>";
			echo "<br/>";

			// Gerenciando os últimos elementos de arrays com array_push(adiciona um ou mais elementos no final de um array)
			// array_pop elimina o último elemento de um array
			$v5=array(3,5,8,2);
			array_push($v5, 7);
			print_r($v5);
			array_pop($v5);
			print_r($v5);
			echo "<br/>";
			echo "<br/>";

			// Gerenciando os primeiros elementos de arrays com array_unshift(adiciona um ou mais elementos no início de um array)
			// array_shift remove o primeiro elemento de um array
			$v6=array(3,5,8,2);
			array_unshift($v6, 7);
			print_r($v6);
			array_shift($v6);
			print_r($v6);
			echo "<br/>";
			echo "<br/>";

			// sort serve para ordenar os valores de um array
			// rsort serve para ordenar os valores de um array em ordem decrescente
			// asort serve para ordernar os valores de um array em ordem crescente, mas desorganizando os índices 
			// arsort serve para ordenar os valores de um array em ordem decrescente, mas desorganizando os índices
			// ksort serve para colocar os valores de um array em ordem pelo índice/chave(key) em ordem crescente
			// krsort serve para colocar os valores de um array em ordem pelo índice/chave(key) em ordem decrescente
			$v7=array(3,5,8,2);
			print_r($v7);
			echo "<br/><br/>";
			sort($v7);
			print_r($v7);
			echo "<br/><br/>";
			rsort($v7);
			print_r($v7);
			echo "<br/><br/>";
			asort($v7);
			print_r($v7);
			echo "<br/><br/>";
			arsort($v7);
			print_r($v7);
			echo "<br/><br/>";
			ksort($v7);
			print_r($v7);
			echo "<br/><br/>";
			krsort($v7);
			print_r($v7);

			?>
		</pre>
	</div>
</body>
</html>