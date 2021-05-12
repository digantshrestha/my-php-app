<?php include_once('shared/header.php'); ?>
    <?php

        $db = connect();
            
        $sql = "select * from courses";
        $query = query($db, $sql);

        while($row = fetch_record($query)){
            echo "<li>".$row['course_name']."</li>";
        }

        close($db);
        
    ?>
<?php include_once('shared/footer.php'); ?>    
    
