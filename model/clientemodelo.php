<?php
require_once("./model/conexion.php");
class clienteModelo
{

    public function registrarcliente($documento, $nombre, $correo, $telefono)
    {
        $pdo = new Conexion();
        $query = $pdo->prepare("INSERT INTO cliente (documento, nombre, correo, telefono) VALUES (:IdEmpleado, :Nombre, :Correo, :Telefono)");
        $query->bindParam(':IdEmpleado', $documento);
        $query->bindParam(':Nombre', $nombre);
        $query->bindParam(':Correo', $correo);
        $query->bindParam(':Telefono', $telefono);

        try {
            $query->execute();
            $otro = header("Location: index.php");
        } catch (Exception $e) {
            $otro = "Error insertando datos. Error:" . $e;
        }
        return $otro;
    }
    
    public function getlistacliente()
    {
        $pdo = new Conexion();
        $query = $pdo->prepare("SELECT * FROM cliente");
        try {
            $query->execute();
            $clientes = $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            $clientes = "ERROR: " . $e;
        }
        return $clientes;
    }

    public function actuacliente($documento)
    {
        $pdo = new Conexion();
        $query = $pdo->prepare("SELECT * FROM cliente WHERE documento = :docu");
        $query->bindParam('docu', $documento);
        $query->execute();
        
        $cliente = $query->fetch(PDO::FETCH_OBJ);
        return $cliente;
    }
    public function eliminarcliente($documento)
    {
        $pdo = new Conexion();
        $query = $pdo->prepare("DELETE FROM cliente WHERE documento = :docu");
        $query->bindParam('docu', $documento);
        try {
            $query->execute();
            $otro = header("Location: index.php");
        } catch (Exception $e) {
            $otro = "Error insertando datos. Error:" . $e;
        }
        
        return $otro;
    }

    public function actualizarModel($documentoV, $documento, $nombre, $correo, $telefono)
    {
        $pdo = new Conexion();

        $query = $pdo->prepare("UPDATE cliente SET documento = :IdEmpleado, nombre = :Nombre, correo = :Correo, telefono = :Telefono WHERE documento = :IdEmpleadoV");
        $query->bindParam(':IdEmpleadoV', $documentoV);
        $query->bindParam(':IdEmpleado', $documento);
        $query->bindParam(':Nombre', $nombre);
        $query->bindParam(':Correo', $correo);
        $query->bindParam(':Telefono', $telefono);
    
        try {
            $query->execute();
            $otro = header("Location: index.php");
        } catch (Exception $e) {
            $otro = "Error insertando datos. Error:" . $e;
        }
        return $otro;
    }
}
