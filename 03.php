<?php
include 'includes/header.php';

class Empleado
{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}


$empleado = new Empleado;
$empleado->nombre = "Marliton";
$empleado->apellido = "Jaimes";

echo "<pre>";
var_dump($empleado);
echo "</pre>";
