<?php

    include 'connect-bdd.php';

    if(empty($_POST)){
        $query = $pdo -> prepare
            (
                "SELECT customerNumber, 
                        customerName
                FROM   customers
                ORDER BY  customerName;"
            );


        $query->execute();

        
        $customers = $query->fetchAll(PDO::FETCH_ASSOC);
        
        
        $template = "templates/addBons";
        include 'layout.php'; 
    }


?>