<?php
include_once "Database.php";
session_start();
class Methode extends DataBase{

    public function insert($name, $des, $cat){

        $sql_insert = "INSERT INTO plats(nom_plat, desc_plat, cat_plat ) VALUES (?,?,?)";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$name, $des, $cat]);

        if($REQ){

            header('location:index.php');
            return $REQ;

        }
        else {
            echo "something went wrong!";
        }
    }

    public function select($table,$col,$value ){

        $sql_insert = "SELECT * FROM $table WHERE $col =  ?";
       // $sql_insert = "SELECT * FROM plats WHERE $col =  ?";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$value]);

        $req= $REQ->fetchAll(PDO::FETCH_ASSOC);

        return $req;


    }
    public function selectplats($col,$value ){

        $sql_insert = "SELECT * FROM plats WHERE $col =  ?";
       // $sql_insert = "SELECT * FROM plats WHERE $col =  ?";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$value]);

        $req= $REQ->fetchAll(PDO::FETCH_ASSOC);

        return $req;


    }
    public function GetMenu($col,$value,$date ){

        $sql_insert = "SELECT * FROM menus WHERE $col =  ? AND disponible_at = ?";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$value,$date]);

        $req= $REQ->fetchAll(PDO::FETCH_ASSOC);

        return $req;


    }
    public function AddMenu($entree1, $entree2, $principale1, $principale2, $dessert1, $dessert2,$date){

        $sql_insert = "INSERT INTO menu (entre1, entre2, plat1, plat2, dessert1,dessert2,date ) VALUES (?,?,?,?,?,?,?)";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$entree1, $entree2, $principale1, $principale2, $dessert1, $dessert2,$date]);

        if($REQ){

            header('location:menu.php');
            return $REQ;

        }
        else {
            echo "something went wrong!";
        }
    }

    public function Order($entree, $principale, $dessert, $date){

        $sql_insert = "INSERT INTO commands (fk_user, entre, plat, dessert,date ) VALUES (?,?,?,?)";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$entree, $principale, $dessert,$date]);

        if($REQ){
            header('location:userCommande.php');
            return $REQ;
        }
        else {
            echo "something went wrong!";
        }
    }
    public function Range($date1, $date2){
       $sql_insert = "SELECT * FROM orders WHERE date BETWEEN ? AND ? ";
       $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$date1, $date2]);

        $req= $REQ->fetchAll(PDO::FETCH_ASSOC);
        return $req;
   }
   public function Count($col,$date, $entre){
       $sql_insert = "SELECT COUNT($col) FROM orders WHERE date = ? and entre= ?";
       $REQ= $this->conx->prepare($sql_insert);
       $REQ->execute([$date, $entre]);

       $req= $REQ->fetch();
       return $req;
   }
}
