<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <?php
        $host        = "host = ec2-54-163-254-204.compute-1.amazonaws.com";
        $port        = "port = 5432";
        $dbname      = "dbname = d6mjtd259173l3";
        $credentials = "user = tfidezexlbnrao password = 3a0bcb2979d3f517c0666569769eb48bcb111bb5bdc48f071b0c0c466ff7f319";
        
        $db = pg_connect("$host $port $dbname $credentials");    
        if(!$db){
            echo "Error : Unable to open database\n";
        }
        else{
            $sql = "select * from courses";
            $query = pg_query($db, $sql);

            while($row = pg_fetch_assoc($query)){
                echo "<li>".$row['course_name']."</li>";
            }

            pg_close($db);
        }
    ?>
    </div>
</body>
</html>
