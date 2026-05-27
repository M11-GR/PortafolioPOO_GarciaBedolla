<?php

declare(strict_types=1);

require_once 'paquete.php';
require_once 'sensor.php';

$paqueteA = new Paquete();
$paqueteB = new Paquete();

$paqueteA->codigoSeguimiento = "FD987654321";
$paqueteA->pesoKilogramos = 5.75;
$paqueteA->esFragil = false;

// $paqueteA->costoInterno = 75.0;

$sensor = new Sensor();
$sensor->id = 202;
$sensor->marca = "UltraSense";
$sensor->ultimaLectura = new DateTime();
$sensor->rangoMaximo = 250.0;

echo "<pre>"; 

echo "Paquete A:\n";
echo "Código de seguimiento: {$paqueteA->codigoSeguimiento}\n";
echo "Peso: {$paqueteA->pesoKilogramos} kg\n";
echo "¿Es frágil?: " . ($paqueteA->esFragil ? "Sí" : "No") . "\n";

echo "\nSensor:\n";
echo "ID: {$sensor->id}\n";
echo "Marca: {$sensor->marca}\n";
echo "Última lectura: {$sensor->ultimaLectura->format('Y-m-d H:i:s')}\n";
echo "Rango máximo: {$sensor->rangoMaximo}\n";

echo "</pre>";