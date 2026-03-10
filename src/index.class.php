<?php 


class Calculadora {
    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    function multiplicacao($a, $b) {
        return $a * $b;
    }

    function divisao($a, $b) {
        if ($b == 0) {
            return 0;
        }
        return $a / $b;
    }
}