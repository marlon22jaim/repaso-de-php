<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

//metodos estaticos
class Empleado
{
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;


    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public static function getMensaje()
    {
        echo "Desde metodo estatico";
    }

    public static function  getNombre()
    {
        return self::$nombre;
    }
}

$empleado = new Empleado("Marliton", "Jaimes", "N.S", "andres_jr19@hotmail.com", 14131011);

echo $empleado::getNombre();

echo "<pre>";
var_dump($empleado);
echo "</pre> <br>";

Empleado::getMensaje();
