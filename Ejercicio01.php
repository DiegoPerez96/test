<?php

echo"1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones. <br>
2. Muestra cuál es mayor, cuál menor o si son iguales. <br>
3. Si las dos variables son valores superiores a 1: calcula el área del triángulo con base y altura igual a los valores de las
variables. <br> <br> ";

echo"1 <br>";

// 1
$num1 = rand(1,50);
$num2 = rand(1,50);

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

echo "Valor de num1: $num1 <br>";
echo "Valor de num2: $num2 <br>";

echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "División: $division <br> <br>";

echo"2 <br>";
// 2
if ($num1 > $num2) {
    echo "El valor de num1 ($num1) es mayor que num2 ($num2) <br> <br>";
} elseif ($num1 < $num2) {
    echo "El valor de num1 ($num1) es menor que num2 ($num2) <br> <br>";
} else {
    echo "num1 ($num1) y num2 ($num2) son iguales <br> <br>";
}

echo"3 <br>";
// Cálculo del área del triángulo si ambas variables son mayores a 1
if ($num1 > 1 && $num2 > 1) {
    $areaTriangulo = ($num1 * $num2) / 2;
    echo "El área del triángulo con base $num1 y altura $num2 es: $areaTriangulo <br>";
} else {
    echo "No se puede calcular el área del triángulo porque uno o ambos valores son menores o iguales a 1. <br>";
}
?>
