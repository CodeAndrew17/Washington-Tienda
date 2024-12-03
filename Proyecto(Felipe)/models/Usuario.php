<?php
    
    class Usuario{
        private $id_usuario;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;

        private $db;

        public function __construct()
        {
            $this->db=Database::connect();
        }

        //getters
        function getId(){
            return $this->id_usuario;
        }

        function getNombre(){
            return $this->nombre;
        }

        function getApellidos(){
            return $this->apellidos;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost'=>4]);
        }

        function getRol(){
            return $this->rol;
        }

        function getImagen(){
            return $this->imagen;
        }

        //setters
        function setId($id_usuario){
            $this->id_usuario = $id_usuario;
        }

        function setNombre($nombre){
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        function setApellidos($apellidos){
            $this->apellidos = $this->db->real_escape_string($apellidos);
        }

        function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }

        function setPassword($password){
            $this->password = $password;
        }

        function setRol($rol){
            $this->rol = $rol;
        }

        function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function save(){
            $sql = "INSERT INTO t_usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user',NULL)";
            $save = $this->db->query($sql);

            $result = false;
            if($save){
                $result = true;
            }
            return $result;
        }
    }