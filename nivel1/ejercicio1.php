<?php declare(strict_types=1);

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
// objetos
$employee1 = new Employee;
$employee2 = new Employee;
$trainee = new Employee;
$CEO = new Employee;

 // llamada a metodos
$employee1->initialize("Peter", 5500);
$employee2->initialize("Elma", 35000);
$trainee->initialize("Lucas", 1000);
$CEO->initialize('Susana', 99999);

$employee1->print();
$employee2->print();
$trainee->print();
$CEO->print();

?>