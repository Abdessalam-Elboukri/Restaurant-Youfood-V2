<?php

namespace app\core;
use app\models\User;
use app\models\PlatsModel;

use PDO;

abstract class DbModel extends Model
{
    public $dataList = [];

    abstract public function tableName(): string;

    abstract public function attributes(): array;

    public static function primaryKey(): string{
         return 'id';
}
    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes );
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).") 
                    VALUES (".implode(',', $params).") ");

        foreach($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql); 
    }

    public function update(int $id)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => "$attr=:$attr", $attributes );
        $statement = self::prepare("UPDATE $tableName SET  
                   ".implode(',', $params)." WHERE id = $id");
        foreach($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public function updatePlat(int $id, string $col)
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => "$attr=:$attr", $attributes );
        $statement = self::prepare("UPDATE $tableName SET  
                   ".implode(',', $params)." WHERE $col = $id");
        foreach($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public function selectAll($attributes=[])
    {
        
        $tableName = $this->tableName();
        if(empty($attributes)){
            $attr='*';
        }else{
            $attr=implode(',', $attributes);
        }
        $statement = self::prepare("SELECT $attr FROM $tableName");
        $statement->execute();
        $this->dataList =  $statement->fetchAll(PDO::FETCH_OBJ);
        return true;
    }

    public function select($id, string $col)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName where $col = $id");
        $statement->execute();
        $this->dataList = $statement->fetch();
        return true;
    }


    public function Get(String $col,String $value,$attributes=[]){

        $tableName = $this->tableName();
        if(empty($attributes)){
            $attr='*';
        }else{
            $attr=implode(',', $attributes);
        }
        $statement = self::prepare("SELECT $attr FROM $tableName  WHERE $col =  ?");
        $statement ->bindParam(1, $value, PDO::PARAM_STR);
        $statement->execute();
        $this->dataList = $statement->fetchAll(PDO::FETCH_ASSOC);
        return true;


    }
    public function getMyCommands(String $table, String $date , String $user){
        $statement = self::prepare("SELECT * FROM $table  WHERE menu_date =  ? AND fk_user = ? ");
        $statement ->bindParam(1, $date, PDO::PARAM_STR);
        $statement ->bindParam(2, $user, PDO::PARAM_STR);
        $statement->execute();
        $this->dataList = $statement->fetchAll(PDO::FETCH_ASSOC);
        return true;
    }

    public function delete(int $id, String $col)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("DELETE FROM $tableName WHERE $col = $id");
        $statement->execute();
        return true;
    }

    public static function findOne($where)
    {

        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM users WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
    public function count(){
         $tableName = $this->tableName();
        $statement= self::prepare("SELECT COUNT(*) as number  FROM $tableName");
        $statement->execute();
        return $statement->fetch();
    }


    // public function countGroup(Type $var = null)
    // {
    //     $tableName = $this->tableName();
    //     $statement= self::prepare("SELECT COUNT(*) as number  FROM $tableName GROUP BY ");
    // }

    // public function setProperties(array $properties)
    // {
    //     foreach ($properties as $key => $value) {
    //         $this->{$key} = $value;
    //     }
    // }
}