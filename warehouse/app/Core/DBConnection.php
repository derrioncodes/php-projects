<?php

namespace App\Core;
use PDO;

    class DBConnection{
        public static function start($config){
            try{
                return $pdo = new PDO("mysql:host=127.0.0.1;dbname=warehouse", "root", "root");
                 // dd("connected to database");
               } catch (PDOException $e) {
                 dd($e->getMessage());
             }

        }
    }


?>