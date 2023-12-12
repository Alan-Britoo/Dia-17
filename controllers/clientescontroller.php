<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '../Config/config.php';

class clientescontroller
{
    private $conn;
    function index()
    {
        $resul = new clientes();
        $prueba = $resul->all();
        return $prueba;
    }
}
