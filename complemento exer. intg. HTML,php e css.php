<!DOCTYPE html>
<html>
<head>
	<?php
		$txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
		$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style type="text/css">
		span.texto {
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor;?>;
		}
	</style>
</head>
<body>
	<div>
		<?php
			echo "<span class='texto'>$txt</span><br/>";
		?>
		<a href="index.html">Voltar</a>
	</div>
</body>
</html>