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
            'entrer1' => [self::RULE_REQUIRED],
            'entrer2' => [self::RULE_REQUIRED],
            'principale1' => [self::RULE_REQUIRED],
            'principale2' => [self::RULE_REQUIRED],
            'dessert1' => [self::RULE_REQUIRED],
            'dessert2' => [self::RULE_REQUIRED],
            'dessert3' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['entrer1', 'entrer2', 'principale1', 'principale2', 'dessert1', 'dessert2', 'dessert3'];
    }


    
  public function GetMenu(String $col, String $value,$attributes=[] ){
    return parent::GetMenu($col, $value,$attributes=[]);

  }
  
//   public function jibMenu()
//   {
//       return parent::jibMenu();
//   }
  public function select( $id, string $col)
    {
        return parent::select($id, $col);
    }

    
}