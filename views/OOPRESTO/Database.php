<?php

class Database{

    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "YF_db";

        try{
            $this->conx= new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
            $this -> conx -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die("Connection failed: ".$e->getMessage());

        }

    }
}
