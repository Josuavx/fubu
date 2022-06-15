<?php

/*
$servername = "localhost";
$username = "root";
$password = "";
$DBName = "staff";
*/

abstract class DAOConexao{
    protected  $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $DBName = "FUBU";
    
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->DBName", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
   
    public function inserir($dados)
    {
        
    }
    
    public function deletar($dados)
    {
        
    }
    
    public function buscar($dados)
    {
        
    }
    
    public function editar($dados)
    {
        
    }
    
    
}

/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/
?>