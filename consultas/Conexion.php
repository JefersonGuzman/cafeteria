<?php

    class Conectar{

        private $servidor="localhost";
        private $usuario="root";
        private $db_name="cafeteria";
        private $clave="";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db_name) or die ("Error en la Conexion a la BBDD");
            return $conexion;
        }
    }

   

?>