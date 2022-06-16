<?php
class database
{

    private $dns = "mysql:host=localhost;dbname=blog";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO($this->dns, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connect failed" . $e->getMessage();
        }
        return $this->conn;
    }
}


?>