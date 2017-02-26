<?php

/**
* Usando PHP, crear una clase llamada CompleteRange ​que tenga un método
llamado build ​el cual tome un parámetro de colección de números enteros
positivos (1,2,3, ...n). El algoritmo debe completar si faltan números en la
colección en el rango dado. Finalmente devolver la colección completa.
Indicaciones
● Crear la solución en un solo archivo llamado CompleteRange​.php
● El método build devuelve la salida del algoritmo
● Considerar el parámetro de colecciones con números enteros positivos
ordenados de manera ascendente. Ejemplo [4, 6, 7 ,10]
*/

class CompleteRange{
	
	function build(){
		$paramns = func_get_args();
		$herencia = null;
		for ($i=0; $i < count($paramns); $i++) { 
			echo ($paramns[$i] - (is_null($herencia)? $paramns[$i] : $herencia) > 1)? $this->printRangeFaltante($herencia, $paramns[$i]): $paramns[$i].',';
			$herencia = $paramns[$i];
		}
	}

	function printRangeFaltante($star, $end){
		for ($i=$star + 1; $i < $end; $i++) { 
			echo '<b>'.$i.'</b>,';
		}
		echo $end.',';
	}
}

$cr = new CompleteRange;
$cr->build(1,4,5);