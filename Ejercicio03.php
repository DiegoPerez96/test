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

$var1 = 12;
$var2 = 8;

echo "Números pares desde 0 hasta $var1:<br>";
for ($i = 0; $i <= $var1; $i++) {
    if ($i % 2 == 0) { 
        echo $i . "<br>";
    }
}

echo "<br>"; 

echo "Progresión desde $var2 hasta 0:<br>";
$contador = $var2;
while ($contador >= 0) {
    echo $contador . "<br>";
    $contador--;
}

echo "<br>"; 

echo "Progresión desde $var1 a $var2:<br>";
$contador = $var1;
do {
    echo $contador . "<br>";
    $contador--;
} while ($contador >= $var2 && $var1 > $var2);

