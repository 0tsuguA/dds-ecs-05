<?php
require_once 'producto.php';
require_once 'marca.php';

class Proovedor{
    public $Id;
    public $NombreApellido;
    public $NumerodeDocumento;
    public $Producto;

    public function MostrarDatosP(){
        echo 'Datos del Proovedor'. '<br>';
        echo 'Id del proovedor: '. $this->Id . '<br>';
        echo 'Nombre y Apellido del proovedor: '. $this->NombreApellido . '<br>';
        echo 'Numero de Documento del proovedor: '. $this->NumerodeDocumento . '<hr>';
        echo 'Datos del producto'. '<br>';
        echo 'Id del producto: ' . $this->Producto->Id. '<br>';
        echo 'Codigo del producto: ' .$this->Producto->Codigo. '<br>';
        echo 'Descripcion del producto: ' . $this->Producto->Descripcion. '<hr>';
        echo 'Marca del producto'. '<br>';
        echo 'Id de la marca del producto: '. $this->Producto->Marca->Id. '<br>' ;
        echo 'Descripcion del producto: ' . $this->Producto->Marca->Descripcion. '<br>';
        echo 'Codigo del producto: ' . $this->Producto->Marca->Codigo;
    }


}