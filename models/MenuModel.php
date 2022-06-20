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


    public function tableName(): string
    {
        return 'menus';
    }

    public function rules(): array
    {
        return [
            'entrer' => [self::RULE_REQUIRED],
            'principale' => [self::RULE_REQUIRED],
            'dessert' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['entrer', 'principale', 'dessert'];
    }


    
  public function GetMenu(String $col, String $value ){
    return parent::GetMenu($col, $value );
  }


    public function save()
    {
        return parent::save();
    }





    
}