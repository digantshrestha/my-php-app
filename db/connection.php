<?php
    function connect(){
        $host        = "host = ec2-50-17-255-120.compute-1.amazonaws.com";
        $port        = "port = 5432";
        $dbname      = "dbname = deeeilm5fs1jof";
        $credentials = "user = psdebomkeozfwi password = f1423f4cd4df630f1ad334896353a7267f7b163b4db3738a924ef1d1f89c1861";
        
        $db = pg_connect("$host $port $dbname $credentials");
        
        return $db;
    }

    function query($db, $sql){
        return pg_query($db, $sql);
    }

    function fetch_record($result){
        return pg_fetch_assoc($result);
    }

    function close($db){
        pg_close($db);
    }


?>