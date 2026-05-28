<?php
$archivo = 'bitacora.txt';
$mensaje_exito = "";
$mensaje_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fecha']) || empty($_POST['actividad']) || empty($_POST['responsable'])) {
        $mensaje_error = "Todos los campos son obligatorios. Por favor, completa el formulario.";
    } else {
        $fecha = strip_tags(trim($_POST['fecha']));
        $actividad = strip_tags(trim($_POST['actividad']));
        $responsable = strip_tags(trim($_POST['responsable']));

        $bloque_actividad  = "Fecha: " . $fecha . "\n";
        $bloque_actividad .= "Actividad: " . $actividad . "\n";
        $bloque_actividad .= "Responsable: " . $responsable . "\n";
        $bloque_actividad .= "----------------------------------------\n";

        if (file_put_contents($archivo, $bloque_actividad, FILE_APPEND | LOCK_EX) !== false) {
            $mensaje_exito = "Actividad registrada con éxito en la bitácora.";
        } else {
            $mensaje_error = "Hubo un error al intentar escribir en el archivo.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Bitácoras - Seguridad</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff0f5; color: #4a3b42; margin: 0; padding: 20px; }
        .container { max-width: 600px; background: #fff; margin: 0 auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        h2, h3 { color: #d147a3; border-bottom: 2px solid #ffd1dc; padding-bottom: 8px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; color: #85336c; }
        input[type="text"], input[type="date"], textarea { width: 100%; padding: 10px; border: 1px solid #ffccd5; border-radius: 4px; box-sizing: border-box; }
        textarea { resize: vertical; height: 80px; }
        button { background-color: #ff8da1; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; font-weight: bold; }
        button:hover { background-color: #ff758f; }
        .alert { padding: 10px; margin-bottom: 20px; border-radius: 4px; font-weight: bold; }
        .alert-success { background-color: #ffe5ec; color: #b32d56; border: 1px solid #ffccd5; }
        .alert-error { background-color: #fce8e6; color: #a83232; border: 1px solid #f5c6cb; }
        .bitacora-box { background: #fff0f3; color: #a83257; padding: 15px; border-radius: 4px; border: 2px solid #ffccd5; overflow-x: auto; font-family: 'Courier New', Courier, monospace; }
        .no-data { color: #b58da3; font-style: italic; }
    </style>
</head>
<body>

<div class="container">
    <h2>Registro de Bitácora Diaria</h2>

    <?php if (!empty($mensaje_error)): ?>
        <div class="alert alert-error"><?php echo $mensaje_error; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($mensaje_exito)): ?>
        <div class="alert alert-success"><?php echo $mensaje_exito; ?></div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="form-group">
            <label for="actividad">Descripción de la actividad:</label>
            <textarea id="actividad" name="actividad" placeholder="Escribe aquí la revisión, incidente o tarea..."></textarea>
        </div>

        <div class="form-group">
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" placeholder="Nombre del guardia o supervisor">
        </div>

        <button type="submit">Guardar Actividad</button>
    </form>

    <h3>Historial de Actividades</h3>
    
    <?php if (file_exists($archivo) && filesize($archivo) > 0): ?>
        <div class="bitacora-box">
            <pre style="margin:0; white-space:pre-wrap; font-weight:bold;"><?php echo htmlspecialchars(file_get_contents($archivo)); ?></pre>
        </div>
    <?php else: ?>
        <p class="no-data">No hay registros en la bitácora todavía. El archivo se creará con el primer registro.</p>
    <?php endif; ?>
</div>

</body>
</html>