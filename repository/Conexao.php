<?php

class Conexao {

    public static function criar():PDO {
     return new PDO("sqlite:db/vanemovietheater.db");

    }
}

?>
