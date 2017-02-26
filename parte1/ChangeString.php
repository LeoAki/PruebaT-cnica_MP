<?php
/**
Usando PHP, crear una clase llamada ChangeString ​que tenga un método llamado build
el cual tome un parámetro string que debe ser modificado por el siguiente algoritmo .
Reemplazar cada letra de la cadena con la letra siguiente en el alfabeto. Por ejemplo
reemplazar a por b ó c por d. Finalmente devolver la cadena.

Indicaciones
● Crear la solución en un solo archivo llamado ChangeString.php
● El método build devuelve la salida del algoritmo
● Considerar el siguiente abecedario : a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r,s, t, u, v, w, x, y, z.
*/

/**
* 
*/
class ChangeString{
	
	public $arrayABC = array(
		'a'=>'b', 'b'=>'c', 'c'=>'d', 'd'=>'e', 'e'=>'f', 'f'=>'g', 'g'=>'h',
		'h'=>'i', 'i'=>'j', 'j'=>'k', 'k'=>'l', 'l'=>'m', 'm'=>'n', 'n'=>'ñ',
		'ñ'=>'o', 'o'=>'p', 'p'=>'q', 'q'=>'r', 'r'=>'s', 's'=>'t', 't'=>'u',
		'u'=>'v', 'v'=>'w', 'w'=>'x', 'x'=>'y', 'y'=>'z', 'z'=>'a');

	function build($stringABC){
		for ($i=0; $i < strlen($stringABC); $i++) { 
			$this->getLetter($stringABC[$i]);
		}
	}

	function getLetter($stringAbc){
		if( in_array($stringAbc, $this->arrayABC) || in_array(strtolower($stringAbc), $this->arrayABC) ){
			echo ctype_upper($stringAbc)? '<b>'.strtoupper($this->arrayABC[strtolower($stringAbc)]).'</b>': '<b>'.$this->arrayABC[$stringAbc].'</b>';
		}else{
			echo $stringAbc;
		}
	}
}

$cs = new ChangeString;
$cs->build('"**Casa 52Z');
$cs->build('123 abcd*3');
$cs->build('"**Casa 52');