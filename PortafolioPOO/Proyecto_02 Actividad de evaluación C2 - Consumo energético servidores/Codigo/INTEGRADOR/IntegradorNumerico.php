<?php 

namespace App\Calculo;
 require_once 'FuncionesEnergia.php';
use Exception;
use App\Calculo\FuncionesEnergia;
class IntegradorNumerico { 

    private float $inicio; // Límite inferior (segundos) 
    private float $fin;    // Límite superior (segundos) 
    private int $pasos;    // Precisión (n subintervalos) 
    private string $modo;  // consumo seleccionado (IDLE, AVERANGE, STRESS)
    private float $resultadoKWh = 0.0;  // Almacenamiento del resultado de la energia convertida

    public function __construct(float $a, float $b, int $n = 1000, string $modo = "AVERAGE") { 

        if ($a >= $b) { 
            throw new \Exception("El tiempo inicial debe ser menor al final."); 
        } 

        if ($n <= 0) { 
            throw new \Exception("La precisión (n) debe ser un número positivo."); 
        } 
        $this->inicio = $a; 
        $this->fin = $b; 
        $this->pasos = $n; 
         $this->modo = $modo;
    } 

    /**
     * Modela la función de potencia P(t) = t^2 + 2t
     */
    private function funcionPotencia(float $t): float { 
         return FuncionesEnergia::calcularPotencia($this->modo, $t); 
    } 

    public function calcularEnergiaTotal(): float { 

        $h = ($this->fin - $this->inicio) / $this->pasos; 

        $suma = ($this->funcionPotencia($this->inicio) + $this->funcionPotencia($this->fin)) / 2; 

        for ($i = 1; $i < $this->pasos; $i++) { 
            $t_i = $this->inicio + $i * $h; 
            $suma += $this->funcionPotencia($t_i); 
        } 

        $resultado = $suma * $h;
        $this->resultadoKWh = $resultado * 2.7778e-7;

        return $resultado; 
    } 

    public function obtenerKWh(float $joules): float {
    return FuncionesEnergia::convertirAKWh($joules);
    }
    
    public function getKWh(): float {
    return $this->resultadoKWh;
    }
}