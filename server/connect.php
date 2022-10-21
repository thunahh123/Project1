<?php
    try { 
        $dbh = new PDO("mysql:host=localhost;dbname=sa00832893", 
            "root", ""); 
    } catch (Exception $e) { 
        die("ERROR: Couldn't connect. {$e->getMessage()}"); 
    } 
?>