<?php declare(strict_types=1);
require 'clases.php';

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