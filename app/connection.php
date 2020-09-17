<?php

    $link = mysqli_connect("mysql", "root", "teste", "secretdi");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>