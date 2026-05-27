<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* RECIBIR DATOS */
$productos = $_POST['nombre'];
$precios = $_POST['precio'];

/* CONVERTIR PRECIOS A NÚMEROS */
foreach ($precios as $i => $valor) {
    $precios[$i] = floatval($valor);
}

/* CÁLCULOS */
$total = array_sum($precios);
$promedio = $total / count($precios);

$max = max($precios);
$min = min($precios);

$indiceMax = array_search($max, $precios);
$indiceMin = array_search($min, $precios);

$productoMax = $productos[$indiceMax];
$productoMin = $productos[$indiceMin];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados Inventario</title>

    <style>
        table{
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Arial;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th{
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Resultados del Inventario</h2>

<table>

    <tr>
        <th>Descripción</th>
        <th>Resultado</th>
    </tr>

    <tr>
        <td>Productos</td>
        <td><?php echo implode(", ", $productos); ?></td>
    </tr>

    <tr>
        <td>Precios</td>
        <td><?php echo implode(", ", $precios); ?></td>
    </tr>

    <tr>
        <td>Total de la venta</td>
        <td><?php echo $total; ?></td>
    </tr>

    <tr>
        <td>Promedio de precios</td>
        <td><?php echo $promedio; ?></td>
    </tr>

    <tr>
        <td>Producto más caro</td>
        <td><?php echo $productoMax . " - $" . $max; ?></td>
    </tr>

    <tr>
        <td>Producto más barato</td>
        <td><?php echo $productoMin . " - $" . $min; ?></td>
    </tr>

</table>

</body>
</html>