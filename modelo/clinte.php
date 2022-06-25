<?php

class Cliente{
    public $Id;
    public $NombreApellido;
    public $NumerodeDocumento;

    public function MostrarDatosC(){
        echo 'Datos del Cliente' . '<br>';
        echo 'Id del cliente: ' . $this->Id . '<br>';
        echo 'Nombre y apellido del clinete: ' . $this->NombreApellido. '<br>';
        echo 'Numero de documento del cliente: ' . $this->NumerodeDocumento. '<hr>';
    }

}