<?php 

	/*
		Crear un programa que lea la edad de una persona y determine si es es niño, adolecente, adulto, o anciano, los valores de referencia son los siguientes:
		- niño: hasta los 12 años
		- adolecente: de los 12 años hasta los 17 años
		- adulto: de los 18 años a los 60 años
		- anciano: mayor de 60 años

		Sintáxis de la condicion si : 

			if ( condición ) {
				expresiones
			} else if ( condicion ) {
				expresiones
			} else {
				expresiones
			}
		
		Operadores lógicos:

			http://php.net/manual/es/language.operators.logical.php
	*/

	$edad = 17;

	if ( $edad < 12 ) {
		echo "La persona es un niño";
	} else if ($edad > 12 && $edad < 17) {
		echo "La persona es un adolecente";
	} else if ($edad > 17 && $edad < 60) {
		echo "La persona es un adulto";
	} else {
		echo "La persona es un anciano";
	}

?>