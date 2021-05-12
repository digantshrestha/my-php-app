<?php

    $host        = "host = ec2-50-17-255-120.compute-1.amazonaws.com";
    $port        = "port = 5432";
    $dbname      = "dbname = deeeilm5fs1jof";
    $credentials = "user = psdebomkeozfwi password = f1423f4cd4df630f1ad334896353a7267f7b163b4db3738a924ef1d1f89c1861";
    
    $db = pg_connect("$host $port $dbname $credentials");

    $sql = "insert into enquiries (first_name, last_name, email, contact_no, course_id,
    message, status) values ($1, $2, $3, $4, $5, $6, $7)";

    pg_prepare($db, 'insert-query', $sql);
    $result = pg_execute($db, 'insert-query', ['Anil', 'Sharma', 'anil12@gmail.com',
                                    '984122323', 1, 'NA', 'false']);
