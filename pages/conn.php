<?php

    try{
        $bdd = new PDO("mysql:host=localhost;dbname=chat","chatuser", "Vo2DAOkPa5xzfT8N");
    }catch(Exception $e){
        die("ERROR : ".$e->getMessage());
    }

?>
