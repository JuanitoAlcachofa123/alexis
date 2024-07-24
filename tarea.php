<?php
// auto.php
class Suma {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calcularSuma() {
        return $this->num1 + $this->num2;
    }
}

$suma = new Suma(7, 8);
$resultado = $suma->calcularSuma();

echo "La suma de 7 y 8 es: $resultado";
?>
