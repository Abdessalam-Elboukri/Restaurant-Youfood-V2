<?php

namespace app\models;

use app\core\DbModel;

class OrderedplatModel extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public $id;
    public string $plat_entrer = '';
    public string $plat_principale =  '';
    public string $plat_dessert =  '';
    public string $user_name =  '';


    public function tableName(): string
    {
        return 'ordered_plats';
    }

    public function rules(): array
    {
        return [
            'plat_entrer ' => [self::RULE_REQUIRED],
            'plat_principale' => [self::RULE_REQUIRED],
            'plat_dessert' => [self::RULE_REQUIRED],
            'user_name' => [self::RULE_REQUIRED],
        ];
    }


    public function attributes(): array
    {
        return ['plat_entrer', 'plat_principale', 'plat_dessert', 'user_name' ];
    }
    
    public function save()
    {
        return parent::save();
    }





    
}