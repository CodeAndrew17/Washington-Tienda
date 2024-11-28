<?php

require_once "models/Usuario.php";

class usuarioController{
    
    public function index(){
        echo "controlador USUARIOS. action index";
    }   

    public function registro(){
    
        require_once "views/usuario/registro.php";
    
    }

    public function save(){
        if(isset($_POST)){
            //var_dump($_POST);
            //die();
            $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
            $apellido = isset($_POST['apellidos']) ? $_POST['apellidos']:false;
            $email = isset($_POST['email']) ? $_POST['email']:false;
            $password = isset($_POST['password']) ? $_POST['password']:false;

            //var_dump($nombre);
            //var_dump($apellido);
            //var_dump($email);
            //var_dump($password);
            //die();
            if($nombre && $apellido && $email && $password){
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                
            }
        }
    }
}