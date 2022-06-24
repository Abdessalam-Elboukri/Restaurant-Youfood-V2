<?php

namespace app\models;

use app\core\DbModel;

class PlatsModel extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public $id_plat;
    public string $nom_plat = '';
    public string $desc_plat = '';
    public string $img_plat =  '';
    public string $cat_plat = '';
    public string $date_ajout = '';


    public function tableName(): string
    {
        return 'plats';
    }

    public function rules(): array
    {
        return [
            'id_plat' => [self::RULE_REQUIRED],
            'nom_plat' => [self::RULE_REQUIRED],
            'desc_plat' => [self::RULE_REQUIRED],
            'img_plat' => [self::RULE_REQUIRED],
            'cat_plat' =>[self::RULE_REQUIRED]
        ];
    }

    public function attributes(): array
    {
        return ['id_plat','nom_plat', 'desc_plat', 'img_plat','cat_plat'];
    }


    
    public function selectAll($attr=[])
    {
        return parent::selectAll();
    }

    
    
    public function save()
    {
        return parent::save();
    }

    
    public  function delete(int $id,String $col)
    {
        return parent::delete($id,$col);
    }

    public function updatePlat(int $id, string $col)
    {
        return parent::updatePlat($id, $col);
    }

    public function select( $id, string $col)
    {
        return parent::select($id, $col);
    }

    public function Get(string $col, string $value, $attributes=[])
    {
        return parent::Get($col, $value, $attributes);
    }
    
    // public function selectIn(string $values)
    // {
    //     return parent::selectIn($values);
    // }

    // public function CheckRole(string $role){
    //     return parent ::CheckRole($role);
    // }
}