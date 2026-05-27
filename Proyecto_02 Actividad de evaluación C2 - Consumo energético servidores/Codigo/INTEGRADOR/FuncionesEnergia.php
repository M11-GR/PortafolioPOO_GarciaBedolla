<?php

namespace App\Calculo;

class FuncionesEnergia {

    public static function calcularPotencia(string $modo, float $t): float {

        switch ($modo) {
            case "IDLE":
                return 5;

            case "AVERAGE":
                return (2 * $t) + 5;

            case "STRESS":
                return self::factorial((int)$t);

            default:
                return 0;
        }
    }

    private static function factorial(int $n): int {
        if ($n <= 1) return 1;
        return $n * self::factorial($n - 1);
    }

    public static function convertirAKWh(float $joules): float {
        return $joules * 2.7778e-7;
    }
}