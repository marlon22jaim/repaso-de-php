<?php
include 'includes/header.php';

class Empleado
{
    protected $nombre;
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

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}


$empleado = new Empleado("Marliton", "Jaimes", "N.S", "andres_jr19@hotmail.com", 14131011);

$empleado->cambiarNombre("nuevo nombre desde el metodo");
echo $empleado->obtenerNombre();

echo "<pre>";
var_dump($empleado);
echo "</pre> <br>";
