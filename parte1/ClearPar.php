<?php

/**
* Usando PHP, crear una clase llamada ClearPar ​que tenga un método llamado
build ​que reciba como parámetro una cadena formada sólo por paréntesis
(()()()()(()))))())((()​). El algoritmo debe eliminar todos los paréntesis que no tienen
pareja.Finalmente devolver la nueva cadena.
Indicaciones
● Crear la solución en un solo archivo llamado ClearPar​.php
● El método build devuelve la salida del algoritmo
● Considerar solamente cadenas formadas de paréntesis
Ejemplos
● entrada : "()())()" salida : "()()()"
● entrada : "()(()" salida : "()()"
● entrada : ")(" salida : ""
● entrada : "((()" salida : "()"
*/

class ClearPar{
	
	function build($paramParen){
		$flag = ')';
		for ($i=0; $i < strlen($paramParen); $i++) { 
			echo ($flag=='(' && $paramParen[$i]==')')? '()':'';
			$flag = $paramParen[$i];
		}
	}
}

$cp = new ClearPar;
$cp->build("()())()");
$cp->build("((()");
$cp->build(")(");