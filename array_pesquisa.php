<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arrays Pesquisa</title>
</head>
<body>

	<?php

		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

		echo "<pre>";
		print_r($lista_frutas);
		echo "</pre>";

		//echo in_array('Abacate', $lista_frutas);// true = 1 / false = vazio ou zero. 
		echo array_search('Maçã', $lista_frutas);
	?>

</body>
</html>