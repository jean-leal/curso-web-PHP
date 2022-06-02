<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Numeros da Mega Sena</title>
</head>
<body>
<?php 
 
	$numeros = array();

	while (count($numeros) <= 5) {
		$num = rand(1,60);
			if (!in_array($num, $numeros)) {
				$numeros[] = $num;
			}
	}

	echo '<h1>Aposta ganhadora da Mega Sena!!!</h1>';

	foreach ($numeros as $idx => $valor) {
		echo 'para o jogo '. $idx.', aposte o número '.$valor . '<br>';
	}
 ?>
</body>
</html>