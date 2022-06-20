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
            'entrer' => [self::RULE_REQUIRED],
            'principale' => [self::RULE_REQUIRED],
            'dessert' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['entrer', 'principale', 'dessert'];
    }


    
    public function selectAll($attr=[])
    {
        return parent::selectAll();
    }

    
    
    public function save()
    {
        return parent::save();
    }





    
}