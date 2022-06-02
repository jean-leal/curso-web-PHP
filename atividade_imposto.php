<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções</title>
</head>
<body>

	<?php

		function calcularImposto ($salario) {
			if ($salario <= 1903.98){
				$imposto = 0;
					} elseif ($salario >= 1903.99 && $salario <= 2826.65){
						$imposto = ($salario * 7.5)/100;	
							}	elseif ($salario >= 2826.66 && $salario <= 3751.05){
								$imposto = ($salario * 15)/100;
								}	elseif ($salario >= 3751.06 && $salario <= 4664.68){
									$imposto = ($salario * 22.5)/100;
									}	else {
										$imposto = ($salario * 27.5)/100;
										}
										return $imposto;
				}
			echo 'O valor do imposto de renda a ser pago é: ' . calcularImposto(5000.54);
		
	
	?>

</body>
</html>