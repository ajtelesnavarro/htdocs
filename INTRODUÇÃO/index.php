<?php
$lista = '23, 81, 101, 456, 53, 12, 34, 67, 89, 90';
$numeros = explode(', ', $lista);

foreach ($numeros as $number) {
    if ($number % 2 == 0) {
        echo $number . " é par.<br>";
    } else {
        echo $number . " é ímpar.<br>";
    }
}

echo'<br><br>';

?>
<?php

$lista_notas = array(
    10,
    8,
    9,
    7,
    6,
    7,
    9,
    5,
    2,
    0,
    5,
    4,
    3,
    5,
    2,
    8,
    6,
    5,
    8,
    9,
    0,
    3
);

$media_notas = array_sum($lista_notas) / count($lista_notas);

$nota_maxima = max($lista_notas);
$nota_minima = min($lista_notas);

echo 'Média das notas: ' . $media_notas . '<br>';
echo 'Nota máxima: ' . $nota_maxima . '<br>';
echo 'Nota mínima: ' . $nota_minima . '<br>';

echo'<br><br>';
?>
<?php

$multiplicado = 1;


while ($multiplicado <= 5) {
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        echo "$multiplicador x $multiplicado = " . ($multiplicador * $multiplicado) . "<br>";
    }
    $multiplicado++;
    echo '<br>';
}

echo'<br><br>';
?>
<?php

$i = 1;

while ($i <= 30) {
    if ($i %5== 0 && $i %3== 0) {
        echo "Número $i: é BUMCLAP!<br>";
    }
    elseif ($i %3== 0) {
        echo "Número $i: é BUM!<br>";
    }
    elseif ($i %5== 0) {
        echo "Número $i: é CLAP!<br>";
    }
    else {
        echo "Número $i: é NADA!<br>";
    }
    $i++;
}
?>