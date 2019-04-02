<?php
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=login','root','');
    } catch (Exception $ex) {
        echo "Error: " . $ex->getMessage();
    }

