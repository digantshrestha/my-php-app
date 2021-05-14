<?php

namespace app\db;

class MysqlDb{
    private $conn;
    private $stmt;

    public function connect(){
        $this->conn = new \Mysqli('localhost', 'root', 'database1234', 'my_php_app');
    }

    public function query($sql){
        $this->stmt = $this->conn->prepare($sql);
        return $this->stmt;
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function getResult(){
        return $this->stmt->get_result();
    }

    public function close(){
        $this->conn->close();
    }
}
