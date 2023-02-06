<?php 

    namespace Samuel\Database; 

    abstract class Conexao {

        private static $conn; 

        public static function getConn(){

            if(!self::$conn) {
                self::$conn = new \PDO('mysql: host=localhost; dbname=login', 'root', 'Sesc2002*');
            }

            return self::$conn; 
        }

    }

    