<?php

namespace app\models;

use app\core\DbModel;

class MenuModel extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public $id_menu;
    public string $entre1 = '';
    public string $entre2 = '';
    public string $plat1 =  '';
    public string $plat2 = '';
    public string $dessert1 = '';
    public string $dessert2 = '';
    public string $dessert3 = '';
    public string $disponible_at = '';
    public string $created_at = '';

    public string $listPlats = '';

    public array $imgs = [];

    public function tableName(): string
    {
        return 'menus';
    }

    public function rules(): array
    {
        return [
            'entre1' => [self::RULE_REQUIRED],
            'entre2' => [self::RULE_REQUIRED],
            'plat1' => [self::RULE_REQUIRED],
            'plat2' => [self::RULE_REQUIRED],
            'dessert1' => [self::RULE_REQUIRED],
            'dessert2' => [self::RULE_REQUIRED],
            'dessert3' => [self::RULE_REQUIRED],
            'disponible_at' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['entre1', 'entre2', 'plat1', 'plat2', 'dessert1', 'dessert2', 'dessert3','disponible_at'];
    }


    
  public function Get(String $col, String $value,$attributes=[] ){
    return parent::Get($col, $value,$attributes);

  }
  

    public function select( $id, string $col)
    {
        return parent::select($id, $col);
    }

    public function deleteMenu( $id, string $col)
    {
        return parent::delete($id, $col);
    }

    
}