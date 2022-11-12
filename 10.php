<?php
include 'includes/header.php';

// herencia

class Persona
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre         = $nombre;
        $this->apellido       = $apellido;
        $this->email          = $email;
        $this->telefono       = $telefono;
    }

    public function getInformacion()
    {

        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
}


class Empleado extends Persona
{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo         = $codigo;
        $this->departamento   = $departamento;
    }
}

class Proveedor extends Persona
{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa  = $empresa;
    }

    public function getInformacion()
    {

        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email . " De la empresa: " . $this->empresa;
    }
}


$empleado = new Empleado("Marlon", "Jaimes", "andres_jr19@hotmail.com", 3003883880, 14131011, "N.S");
$provedor = new Proveedor("Josue", "Perez", "josue@empresa.com", 3142334511, "Facebook");


$empleado->getInformacion();
echo "<br>";
echo $empleado->getTelefono();
echo "<br>";
$provedor->getInformacion();
echo "<br>";
echo $provedor->getTelefono();
