<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
</head>
<body>

<h2>Ingresa los productos</h2>

<form action="procesar.php" method="POST">

<?php for ($i = 0; $i < 5; $i++) { ?>

    <h4>Producto <?php echo $i + 1; ?></h4>

    Nombre:
    <input type="text" name="nombre[]" required>

    Precio:
    <input type="number" step="0.01" name="precio[]" required>

    <br><br>

<?php } ?>

<input type="submit" value="Calcular">

</form>

</body>
</html>