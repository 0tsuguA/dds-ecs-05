<?php

require_once 'modelo/clinte.php';
require_once 'modelo/proovedor.php';
require_once 'modelo/producto.php';
require_once 'modelo/marca.php';

$cliente = new Cliente();
$cliente->Id= 1;
$cliente->NombreApellido= 'Augusto Lopez';
$cliente->NumerodeDocumento= 465465;
$cliente->MostrarDatosC();

$marca= new Marca();
$marca->Id=2;
$marca->Descripcion= '9 de oro';
$marca->Codigo= 65432158;

$producto= new Producto();
$producto->Id=3;
$producto->Codigo= 46546;
$producto-> Descripcion= 'Agridulces';
$producto->Marca=$marca;

$proovedor= new Proovedor();
$proovedor-> Id=4;
$proovedor->NombreApellido= 'Jose Gonzales';
$proovedor->NumerodeDocumento= 6546545;
$proovedor->Producto=$producto;
$proovedor->MostrarDatosP();

