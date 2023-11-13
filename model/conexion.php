<?php
class Conexion extends PDO
{
    protected $dbHost = 'localhost';
    protected $dbUsername = "root";
    protected $dbPassword = "";
    protected $dbName = "php5";
    public function __construct()
    {
        try {
            parent::__construct("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar " . $e->getMessage());
        }
    }
}
