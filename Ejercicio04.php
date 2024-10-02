<?php

echo"1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: <br>
2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for. <br>
3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while. <br>
4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while. <br>
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable.  
<br> <br> ";

$dado = rand(1, 6);


switch ($dado) {
    case 1:
        $opuesto = 6;
        $dadoTexto = "uno";
        break;
    case 2:
        $opuesto = 5;
        $dadoTexto = "dos";
        break;
    case 3:
        $opuesto = 4;
        $dadoTexto = "tres";
        break;
    case 4:
        $opuesto = 3;
        $dadoTexto = "cuatro";
        break;
    case 5:
        $opuesto = 2;
        $dadoTexto = "cinco";
        break;
    case 6:
        $opuesto = 1;
        $dadoTexto = "seis";
        break;
}

echo "El dado ha salido: $dado ($dadoTexto)<br>";
echo "La cara opuesta es: $opuesto<br>";
