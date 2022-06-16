<?php
class database
{

    private $dns = "mysql:host=bgq2lmwjcnixl0ybr080-mysql.services.clever-cloud.com;dbname=bgq2lmwjcnixl0ybr080";
    private $user = "uthgimfoskmma3e1";
    private $pass = "cpx4KF0ZlLbkni7WXbfK";
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