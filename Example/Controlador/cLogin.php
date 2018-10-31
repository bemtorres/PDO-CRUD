<?php
    session_start();
      
    if (!isset($rootDir)) {
        $rootDir = $_SERVER['DOCUMENT_ROOT'];
    }
    require_once ($rootDir . "/DAO/AccesoDAO.php");
    require_once ($rootDir . "/DAO/UsuarioDAO.php");

    $isLogin = "0";
    $usuario ="";
    $pass = "";

    if(isset($_POST["txtUsuario"]) && isset($_POST["txtPass"]) ){
        $usuario = $_POST['txtUsuario'];
        $pass = $_POST['txtPass'];
        $pass = hash('sha256', $pass);

        $arrayAccesos = AccesoDAO::readAll();
        foreach($arrayAccesos as $ac){
            if($ac->getUsername()==$usuario && $ac->getPassword()==$pass){           
                $isLogin = "1";
                $usuario = UsuarioDAO::buscar($ac->getId_usuario());
    
                $tipoU = $usuario->getId_tipo_u();
    
    
                switch ($tipoU) {
                    case 1:
                       // echo "vendedor";
                        $_SESSION['acceso']= serialize($ac);     
                        $_SESSION['usuario']= serialize($usuario);  

                        echo "Entro Vendedor";

                        //header('Location: ../webVides/admin/home.php');                        
                        break;
                    case 2:
                       // echo "cajero";
                       $_SESSION['acceso']= serialize($ac);     
                       $_SESSION['usuario']= serialize($usuario);  
                       echo "Entro Cajero";

                       //header('Location: ../webVides/admin/home.php');          
                       break;
                    case 3:
                        // echo "admin";
                        $_SESSION['acceso']= serialize($ac);     
                        $_SESSION['usuario']= serialize($usuario);  
                        echo "Entro admin";

                        //header('Location: ../webVides/admin/home.php');          
                        break;
               
                }            
            }
        }
    }
   
    if($isLogin=="0"){        
       // $_SESSION['mensaje']= "Usuario Incorrecto";
        
        echo "no existe";

       //header('Location: ../index.php');   
    }
    

?>