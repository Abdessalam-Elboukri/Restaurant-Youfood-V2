<?php

namespace app\models;

use app\core\DbModel;

class OrdersModel extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public $id_command;
    public $fk_user ;
    public string $entre = '';
    public string $plat =  '';
    public string $dessert = '';
    public string $menu_date = '';


    public function tableName(): string
    {
        return 'commands';
    }

    public function rules(): array
    {
        return [
            'entre' => [self::RULE_REQUIRED],
            'plat' => [self::RULE_REQUIRED],
            'dessert' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['fk_user' ,'entre', 'plat', 'dessert', 'menu_date'];
    }


    
    public function selectAll($attr=[])
    {
        return parent::selectAll();
    }

    
    
    public function save()
    {
        return parent::save();
    }

    public function getMyCommands(String $date, String $user )
    {
        return parent::getMyCommands($date , $user);
    }





    
}