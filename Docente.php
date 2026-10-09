<?php

include("Persona.php");

class Docente extends Persona
{
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoriaDocente;
    protected string $tituloAcademico;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoriaDocente,
        string $tituloAcademico,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    )
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoriaDocente = $categoriaDocente;
        $this->tituloAcademico = $tituloAcademico;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string
    {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function getCategoriaDocente(): string
    {
        return $this->categoriaDocente;
    }

    public function getTituloAcademico(): string
    {
        return $this->tituloAcademico;
    }

    public function getTipoContratacion(): string
    {
        return $this->tipoContratacion;
    }
}//fin de la clase Docente


$miDocente = new Docente(
    "DOC001", //codigo de docente
    "Computacion y Sistemas", //departamento
    "Titular", //categoria o rango docente
    "Doctorado", //maximo titulo academico
    "Tiempo Completo", //tipo de contratacion
    "Carlos", //nombre
    "Rodriguez", //apellido
    "1980-08-25" //fecha de nacimiento
);


echo "El nombre del docente es: " . $miDocente->getNombre() . "<br>";
echo "El apellido del docente es: " . $miDocente->getApellido() . "<br>";
echo "La fecha de nacimiento del docente es: " . $miDocente->getFechaNacimiento() . "<br>";
echo "El código del docente es: " . $miDocente->getCodigoDocente() . "<br>";
echo "El departamento del docente es: " . $miDocente->getDepartamento() . "<br>";
echo "La categoría del docente es: " . $miDocente->getCategoriaDocente() . "<br>";
echo "El título académico del docente es: " . $miDocente->getTituloAcademico() . "<br>";
echo "El tipo de contratación del docente es: " . $miDocente->getTipoContratacion() . "<br>";

?>