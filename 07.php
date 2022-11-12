<?php
include 'includes/header.php';

class Empleado
{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function nombreEmpleado()
    {
        echo $this->nombre . " " . $this->apellido;
    }

    public function showDepartamento()
    {
        return $this->departamento;
    }
}


$empleado = new Empleado("Marliton", "Jaimes", "N.S", "andres_jr19@hotmail.com", 14131011);
$empleado2 = new Empleado("Andres", "Rangel", "Santander", "marlon22jaim@gmail.com", 12345);




echo "<pre>";
var_dump($empleado);
echo "</pre> <br>";

echo "<pre>";
var_dump($empleado2);
echo "</pre> <br>";

$empleado->nombreEmpleado();
echo "<br>";
$empleado2->nombreEmpleado();
echo "<br>";

$departamento1 = $empleado->showDepartamento();
$departamento2 = $empleado2->showDepartamento();

echo $departamento1;
echo "<br>";
echo $departamento2;
