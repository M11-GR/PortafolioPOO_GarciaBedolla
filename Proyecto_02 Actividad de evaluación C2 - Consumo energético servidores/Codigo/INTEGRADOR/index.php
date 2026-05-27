<?php 

require_once 'IntegradorNumerico.php';
use App\Calculo\IntegradorNumerico;


$resultado = null; 
$error = null; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    try { 
        $integrador = new IntegradorNumerico( 
            (float)$_POST['t_inicio'],  
            (float)$_POST['t_fin'],  
            (int)$_POST['precision'], 
            $_POST['modo'] 
        ); 

        $resultado = $integrador->calcularEnergiaTotal();
        
        //obtener Kwh
        $kwh = $integrador->getKWh();

    } catch (Exception $e) { 
        $error = $e->getMessage(); 
    } 
} 
?>
<!DOCTYPE html>
<html>
<head>
 <title>Cloud Energy Monitor</title>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="container">
 <h1>Monitor de Energía (DataCenter)</h1>
 <form method="POST">
 <label>Tiempo Inicial (s):</label><br>
 <input type="number" name="t_inicio" step="0.1" required><br>

 <label>Tiempo Final (s):</label><br>
 <input type="number" name="t_fin" step="0.1" required><br>

 <label>Precisión (n subintervalos):</label><br>
 <input type="number" name="precision" value="1000"><br>

 <button type="submit">Calcular Joules Consumidos</button>

 <label>Modo de consumo:</label><br>

<select name="modo">
    <option value="IDLE">IDLE</option>
    <option value="AVERAGE">AVERAGE</option>
    <option value="STRESS">STRESS</option>
</select><br>
 </form>
 <?php if ($resultado !== null): ?>
 <div class="result">
 <h3>Consumo Total: <?php echo number_format($resultado,4);
?> Joules</h3>
 <p><?php echo number_format($kwh,8); ?> kWh</p>
 <p>Cálculo basado en la integral definida de la carga del
servidor.</p>
 </div>
 <h3>Comparación de precisión</h3>

<table border="1">
<tr>
    <th>n</th>
    <th>Resultado</th>
</tr>

<?php
foreach ([10, 100, 1000] as $n) {
    $test = new IntegradorNumerico(0, 10, $n, $_POST['modo']);
    echo "<tr>
            <td>$n</td>
            <td>" . number_format($test->calcularEnergiaTotal(), 4) . "</td>
          </tr>";
}
?>
</table>
 <?php endif; ?>
 <?php if ($error): ?>
 <div class="error"> Error: <?php echo $error; ?></div>
 <?php endif; ?>
 </div>
</body>
</html>