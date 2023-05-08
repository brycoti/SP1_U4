<?php declare(strict_types=1);

abstract class Shape {
    // atributos, en este caso protected porque hay clases hijas
    private float $anchura;
    private float $altura;

    // Constructor
    public function __construct(float $ample, float $alt) {
        $this->anchura = $ample;
        $this->altura = $alt;
    }

    // getter para que las clases hijas puedan acceder
    public function getAnchura(): float {
        return $this->anchura;
    }

    public function getAltura(): float {
        return $this->altura;
    } 

    // metodo general abstracto, varia en las herencias
    
}

class Triangulo extends Shape {
    public function area() : float {
        return ($this->getAnchura() * $this->getAltura()) / 2;
    }
}

class Rectangulo extends Shape {
    public function area(): float {
        return $this->getAnchura() * $this->getAltura();
    }
}

// Objetos
$triangulo1 = new Triangulo(30,15);
$rectangulo1 = new Rectangulo(12,4);

echo "El area del triangulo es " .  $triangulo1->area() . ".<br>";
echo "El area del rectangulo es " . $rectangulo1->area() . ".<br>";


?>