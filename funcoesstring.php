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
			$p="Leite";
			$pr=4.5;
			// echo "O $p custa R$ $pr";
			// Printf serve para mostrar uma string formatada
			printf("O %s custa R$ %.2f<br/>",$p,$pr);
			// %d para valores decimais(postivos ou negativos)
			// %u para valores decimais sem sinal(apenas positivos)
			// %f para valores reais
			// %s para string(caracteres)
			$x[0]=4;
			$x[1]=3;
			$x[2]=8;
			// Printr mostra detalhes de uma variável, principalmente vetores
			echo "<br/>";
			print_r($x);
			echo "<br/>";
			$x2= array(3,7,6,2,1,9);
			print_r($x2);
			// Wordwrap proporciona quebra de linhas no código fonte ou quebra visual
			echo "<br/>";
			$txt="este é um exemplo de string gigante que serve para testar o wordwrap";
			// true vai fazer com que o texto seja quebrado a partir da quantidade definida
			// false vai fazer com que o texto não seja quebrado, mesmo que a quantidade de letras exceda a quantidade definida
			$res=wordwrap($txt,5,"<br/>\n");
			echo "<br/>$res";
			// Strlen calcula o comprimento de uma string, incluindo espaços 
			echo "<br/>";
			$txt="Curso em video";
			echo "<br/>$txt";
			$tamanho=strlen($txt);
			echo "<br/>$tamanho";
			// trim recorta espaços antes e depois de strings, mas não remove espaços entre as strings
			echo "<br/>";
			$nome="   Flor da Silva   ";
			echo "<br/>$nome";
			echo "<br/>". (strlen($nome));
			$novo=(trim($nome));
			echo "<br/>$novo";
			echo "<br/>". (strlen($novo));
			// ltrim elimina apenas os espaços iniciais
			echo "<br/>";
			$nome2="   Thanos da Silva   ";
			echo "<br/>$nome2";
			echo "<br/>". (strlen($nome2));
			$novo2=ltrim($nome2);
			echo "<br/>$novo2";
			echo "<br/>". (strlen($novo2));
			// rtrim elimina apenas os espaços finais
			echo "<br/>";
			$nome3="   Quark da Silva   ";
			echo "<br/>$nome3";
			echo "<br/>". (strlen($nome3));
			$novo3=rtrim($nome3);
			echo "<br/>$novo3";
			echo "<br/>". strlen($novo3);
			// str_word_count mostra a quantidade de palavras existentes em uma string
			echo "<br/>";
			$frase="Eu vou estudar php";
			$cont=str_word_count($frase,0);
			echo "<br/>$frase";
			echo "<br/>";
			print($cont);
			// explode divide uma string em strings, criando, assim, um vetor(cada palavra em 1 índice da variável)
			echo "<br/>";
			$site="Curso em video";
			echo "<br/>$site";
			$vetor=explode(" ", $site);
			echo "<br/>";
			print_r($vetor);
			/* str_split similar ao explode, 
			mas, ao invés de colocar cada palavra em 1 índice da variável, 
			ele adiciona cada letra em um índice */
			echo "<br/>";
			$nome4="Maria";
			echo "<br/>$nome4";
			$vetor2=str_split($nome4);
			echo "<br/>";
			print_r($vetor2);
			// implode junta elementos de uma matriz em uma string
			echo "<br/>";
			$vetor3[0]="Curso";
			$vetor3[1]="em";
			$vetor3[2]="video";
			$texto=implode("#", $vetor3); // Implode pode ser substituída por join, que funciona da mesma maneira
			echo "<br/>";
			print($texto);
			// chr mostra qual letra está no código x
			echo "<br/>";		
			$letra=chr(89);
			echo "<br/>A letra de código 89 é: $letra";
			// ord é o contrário de chr, ou seja, mostra o código da letra selecionada
			echo "<br/>";
			$letra2="c";
			$cod=ord($letra2);
			echo "<br/>A letra $letra2 tem o código: $cod";
			// strtolower converte a string para letras minúsculas
			echo "<br/>";
			$nome5="Machado de Assis";
			echo "<br/>$nome5";
			echo "<br/>";
			print("Seu nome é ". strtolower($nome5));
			// strtoupper contrário de strtolower, ou seja, converte a string para letras maiúsculas
			echo "<br/>";
			$nome6="Van Hellsing";
			echo "<br/>$nome6";
			echo "<br/>";
			print("Seu nome é ". strtoupper($nome6));
			// ucfirst coloca a primeira letra da string em maiúsculo
			echo "<br/>";
			$nome7="trinity";
			echo "<br/>$nome7";
			echo "<br/>";
			print(ucfirst($nome7));
			// ucwords coloca a primeira letra de cada nome da string em maiúsculo
			echo "<br/>";
			$nome8="eren jaeger";
			echo "<br/>$nome8";
			echo "<br/>";
			print(ucwords($nome8));
			// strrev mostra a string invertida
			echo "<br/>";
			$nome9="Conde de Monte Cristo";
			echo "<br/>$nome9";
			echo "<br/>";
			print(strrev($nome9));
			// strpos encontra a primeira ocorrência de uma string
			echo "<br/>";
			$frase2="Estou aprendendo PHP";
			$pos=stripos($frase2, "php");
			echo "<br/>$frase2";
			echo "<br/>A string foi encontrada na posição $pos";
			//stripos encontra a primeira ocorrência de uma string sem diferenciar maiúsculas e minúsculas
			echo "<br/>";
			echo "<br/> Utilizando stripos $frase2";
			echo "<br/>A string foi encontrada na posição $pos";
			// substr_count mostra a quantidade de vezes que uma string foi encontrada
			echo "<br/>";
			$frase3="estou aprendendo PHP no curso em video de PHP";
			$cont2=substr_count($frase3, "PHP");
			echo "<br/>$frase3";
			echo "<br/>";
			print("PHP encontrado $cont2 vezes");
			// substr retorna uma parte de uma string
			echo "<br/>";
			$site2="Curso em Video";
			$sub=substr($site2, 0,5);
			echo "<br/>$site2";
			echo "<br/>$sub";
			// str_pad preenche uma string para um certo tamanho com outra string
			echo "<br/>";
			echo "<br/>$nome6";
			$novo4=str_pad($nome6,30," ", STR_PAD_RIGHT);
			echo "<br/>";
			print("Meu professor $novo4 é lindo!");
			// str_repeat vai repetir uma string na quantidade de vezes indicada
			echo "<br/>";
			$txt2=str_repeat("Php",5);
			echo "<br/>";
			print("O texto gerado foi $txt2");
			// str_replace substitui uma string por outra indicada, existe também str_ireplace
			echo "<br/>";
			$frase4="Eu gosto de estudar Matemática!!!";
			echo "<br/>$frase4";
			$novaFrase=str_replace("Matemática", "PHP", $frase4);
			echo "<br/>";
			print($novaFrase);
		?>
	</div>
</body>
</html>