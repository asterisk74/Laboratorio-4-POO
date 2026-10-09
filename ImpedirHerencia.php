<?php
final class Coche
{
    public function getColor()
    {
        echo "Rojo";
    }
}
Class cocheDeLujo extends Coche
{
    //Error Fatal, Clase no heredade.
        public function mostrarColor()
    {
        $this->getColor();
    }
}

$miCoche = new CocheDeLujo();
$miCoche->mostrarColor();

?>