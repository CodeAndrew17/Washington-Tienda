<?php

require_once "models/Usuario.php";

class usuarioController {
    
    public function index() {
        echo "Controlador USUARIOS. Action index";
    }   

    public function registro() {
        // Muestra el formulario de registro
        require_once "views/usuario/registro.php";
    }

    public function save() {
        // Comprobamos si los datos han sido enviados
        if (isset($_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['password'])) {

            // Filtramos y sanitizamos los datos
            $nombre = htmlspecialchars(trim($_POST['nombre']));
            $apellidos = htmlspecialchars(trim($_POST['apellidos']));
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
            $password = trim($_POST['password']);
            
            // Validación básica
            if (empty($nombre) || empty($apellidos) || empty($email) || empty($password)) {
                // Si algún campo está vacío, mostramos un error
                echo "Por favor, complete todos los campos.";
                return;
            }

            // Verificamos si el email es válido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "El correo electrónico no es válido.";
                return;
            }

            // Creamos un nuevo objeto Usuario
            $usuario = new Usuario();
            $usuario->setNombre($nombre);
            $usuario->setApellidos($apellidos);
            $usuario->setEmail($email);
            $usuario->setPassword($password);

            $save=$usuario->save();

        }
    }
}
?>
