<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'principalVista.php';
    }else{
        header ('location: login.php');
    }
        
