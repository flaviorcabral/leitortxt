<?php

class Conexao {

    public static $instance;

    

    public static function getConexao() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=leitor', 'root', '');
        }

        return self::$instance;
   

}
}