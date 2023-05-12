<?php

class Employee {
    // Attributos
    private string $name;
    private float $salary;

    // metodo Initialize
    public function initialize(string $name, float $salary): void {
        $this->name = $name;
        $this->salary = $salary;
    }

    // metodo Print
    public function print(): void {
        echo "Name: {$this->name}<br>";
        echo "Salary: {$this->salary}<br>";
        if ($this->salary > 6000) {
            echo "Paga impuestos.<br><br>";
        } else {
            echo "No paga impuestos.<br><br>";
        }
    }
}



abstract class Shape {
    // atributos, en este caso protected porque hay clases hijas
    protected float $anchura;
    protected float $altura;

    // Constructor
    public function __construct(float $ample, float $alt) {
        $this->anchura = $ample;
        $this->altura = $alt;
    }
}

class Triangulo extends Shape {
    public function area() : float {
        return ($this->anchura * $this->altura) / 2;
    }
}

class Rectangulo extends Shape {
    public function area(): float {
        return $this->anchura * $this->altura;
    }
}

?>