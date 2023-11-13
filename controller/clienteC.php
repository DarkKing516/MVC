<?php

include("./model/clientemodelo.php");

require_once("./model/conexion.php");

class clienteC
{
    public function nuevo()
    {
        require_once("./views/crearcliente.php");
    }


    public function crear()
    {
        $documento = $_GET['documento'];
        $nombre = $_GET['nombre'];
        $telfono = $_GET['telefono'];
        $correo = $_GET['correo'];

        $clientes = new clienteModelo;
        return $clientes->registrarcliente($documento, $nombre, $correo, $telfono);
    }

    public function listaclientes()
    {
        $clientes = new clienteModelo();
        return $clientes->getlistacliente();
    }
    public function actucliente()
    {
        $documento = $_GET['docu'];
        include("./views/actualizarcliente.php");
    }
    public function actualizarcliente($documento)
    {
        // $documento = $_GET['docu'];
        $clientes = new clienteModelo();
        $cliente = $clientes->actuacliente($documento);
        return $cliente;
    }

    public function eliminarcli()
    {
        $documento = $_GET['docu'];
        $clientes = new clienteModelo();
        $cliente = $clientes->eliminarcliente($documento);
        return $cliente;
    }

        public function actualizar()
        {
            $documento = $_GET['documento'];
            $documentoV = $_GET['documentoV'];
            $nombre = $_GET['nombre'];
            $telefono = $_GET['telefono'];
            $correo = $_GET['correo'];

            $clientes = new clienteModelo();
            $cliente = $clientes->actualizarModel($documentoV, $documento, $nombre, $correo, $telefono);
            return $cliente;
        }
}
