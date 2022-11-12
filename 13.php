<?php
include 'includes/header.php';
include "DB.php";

// comunicando dos clases
class Empleado
{
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;


    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo =$codigo;
    }
}


$empleado = new Empleado("Marliton", "Jaimes", "N.S", "andres_jr19@hotmail.com", 14131011);
$nombre = $empleado->getNombre();

$db = new DB($nombre);

$db->guardar();