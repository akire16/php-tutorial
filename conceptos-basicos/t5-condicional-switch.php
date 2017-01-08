<?php 

	/*
		Hacer un programa que lea el tipo de fruta y determine su precio basado en la siguiente tabla:
		-manzana: $10.000
		-naranja: $8.000
		-banano: $6.000
		-fresas: $9.000

		Sintáxis de la extructura switch:
			switch ( valor a evaluar ) {
	
				case condicion1:
					expresiones
				break;

				case condicion2:
					expresiones
				break;

				case condicion3:
					expresiones
				break;

				default:
					expresiones
				break;
			}

			Nota: si ninguna de las condiciones de cumple, se ejecuta el caso default.

	*/

	$fruta = "sandia";
	
	switch ( $fruta ) {
		
		case "manzana":
			echo "El precio de la manzana es de $10.000 mil pesos";
		break;

		case "naranja":
			echo "El precio de la naranja es de $8.000 mil pesos";
		break;

		case "banano":
			echo "El precio del banano es de $6.000 mil pesos";
		break;

		case "fresas":
			echo "El precio de las fresas es de $9.000 mil pesos";
		break;

		default:
			echo "La fruta no esta en existencia";
		break;
}		

?>