<?php

echo "Ingresa el tiempo que quieres calcular en segundos."."\n";

// recolección de datos
$hours = readline('Cuantas horas son: ');
$minutes = readline('Cuantos minutos son: ');
$seconds = readline('Cuantos segundos son: ');

// a segundos
$hours_a_second = $hours * 3600;
$minutes_a_second = $minutes * 60;
$seconds = $seconds;

// suma de segundos
$total_seconds = $hours_a_second + $minutes_a_second + $seconds;
echo "$hours horas $minutes minutos $seconds segundos, son: $total_seconds segundos.";