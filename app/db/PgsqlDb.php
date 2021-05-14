<?php

namespace app\db;

class PgsqlDb{
    private $conn; 

    public function connect(){
        $host        = "host = ec2-50-17-255-120.compute-1.amazonaws.com";
        $port        = "port = 5432";
        $dbname      = "dbname = deeeilm5fs1jof";
        $credentials = "user = psdebomkeozfwi password = f1423f4cd4df630f1ad334896353a7267f7b163b4db3738a924ef1d1f89c1861";
        
        $this->conn = pg_connect("$host $port $dbname $credentials");
    }

    public function query($sql){
        return pg_query($this->conn, $sql);
    }

    public function execute($sql, $args){
        pg_prepare($this->conn, 'crud-query', $sql);
        return pg_execute($this->conn, 'crud-query', $args);
    }

    public function getResult($result){
        return pg_fetch_assoc($result);
    }

    public function close(){
        pg_close($this->conn);
    }
}