<?php
include 'includes/header.php';

class Empleado
{
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {
    }
}

$empleado = new Empleado("Marliton", "Jaimes", "N.S", "andres_jr19@hotmail.com", 14131011);
$empleado2 = new Empleado("Andres", "Rangel", "Santander", "marlon22jaim@gmail.com", 12345);


echo "<pre>";
var_dump($empleado);
echo "</pre> <br>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";
