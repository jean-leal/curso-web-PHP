<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Curso PHP</title>
</head>
<body>

	<h1>Doação de sangue</h1>
	<?php
		$idade = 19;
		$peso = 66;

		if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
			echo "Atende os requisitos";
		} else {
			echo "Não atende os requisitos";
		}

	?>

</body>
</html>