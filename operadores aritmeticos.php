<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Primeiro exemplo PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div>
	<h1>testando PHP</h1>
	<!-- supertag para php em html -->
	<?php   
		echo "olá, mundo!<br/>";
		// Comando para atribuição de valores às variáveis pelo usuário //
		$n = $_GET["a"];
		$n2 = $_GET["b"];
		echo "<h2>Valores recebidos: $n e $n2 </h2>";
		$m = ($n + $n2) / 2;
		echo "<br/>A soma vale ". ($n + $n2); 
		echo "<br/>A subtracao vale ". ($n - $n2);
		echo "<br/>A multiplicacao vale ". ($n * $n2);
		echo "<br/>A divisao vale ". ($n / $n2);
		echo "<br/>O modulo vale ". ($n % $n2);
		echo "<br/>A media vale $m";
		$no = "<br/>Ana";
		echo $no. " tem ". $n. " anos!";
		// função para valor absoluto em php //
		echo "<br/>O valor absoluto de a e: ". abs($n);
		// função para potenciação em php //
		echo "<br/>A potenciação entre a e b e: ". pow($n, $n2);
		// função para raiz quadrada em php //
		echo "<br/>A raiz quadrada de b e: ". sqrt($n2);
		// função para arredondamento em php //
		echo "<br/>O valor arredondado de b e: ". round($n2); // podem ser usados também ceil e floor //
		// função para parte inteira de um número em php //
		echo "<br/>O valor inteiro de b e: ". intdiv($n2, $n);
		// função para forma~tação de um número em php //
		echo "<br/>O valor de a em moeda e R$:". number_format($n);
	?>
	</div>
</body>
</html>