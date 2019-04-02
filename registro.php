<?php session_start();

    if(isset($_SESSION['usuario']))
    {
        header('location: index.php');
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave2 = $_POST['clave2'];
        $clave = hash('sha256', $clave);
        $clave2 = hash('sha256', $clave2);

        
        $error = '';
        
        if(empty($correo) || empty($usuario) || empty($clave) || empty($clave2))
        {
            $error .= 'Necesitas llenar todos los campos';
            if($clave< min(8))
            {
              $error .= 'La contraseñas deben tener minimo 8 caracteres, almenos una Mayuscula y un número';  
            }
        }
        else
        {
            require 'conexion.php';
            $query = $conexion->prepare('SELECT * '
                    . '                 FROM users'
                    . '                 WHERE usuario = :usuario');
            $query->execute(array(':usuario' => $usuario));
            $result = $query->fetch();
            
            if($result != false)
            {
                $error .= 'Usuario existente';
            }
            if($clave != $clave2)
            {
                $error .= 'Las contraseñas no coinciden';
            }
        }
        if($error == '')
        {
            $query = $conexion->prepare('INSERT INTO users (id, usuario, email, password) VALUES (null, :usuario, :correo, :clave)');
            $query->execute(array(
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':clave' => $clave
            ));
            header('location: login.php');
        }
    }
    
    require 'RegistroVista1.php';