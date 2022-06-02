<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções</title>
</head>
<body>

	<?php

		function exibirBoasVindas () {
			echo 'Bem-Vindo ao curso de PHP!';
		}

		exibirBoasVindas();


		function calcularAreaTerreno($largura, $comprimento) {
			$area = $largura * $comprimento;
			return $area;
		}

		echo '<br />';
		echo calcularAreaTerreno(5, 25);
		echo '<br />';
		echo calcularAreaTerreno(10, 15);

	
	?>

</body>
</html>