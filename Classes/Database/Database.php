<?php

namespace Classes\Database;

class Database
{
    public $conn;
    
    public function __construct() 
    {
        try {
            // quando a classe é nativa do php, usa-se a barra invertida antes
            $this->conn = new \PDO('pgsql:host=localhost;dbname=postgres', 'postgres', 'victor81854778');
            echo 'carregado banco;';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

