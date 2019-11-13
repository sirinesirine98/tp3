<?php
    try {
        $cnx= new PDO('mysql:host=localhost;dbname=dsi22_g1_2019','root','');
        
    } catch (expectation $e) {
        echo 'erreur ! '.$e->getMessage().'';
    }
    ?>