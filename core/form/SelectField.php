<?php

namespace app\core\form;
use app\core\Model;

class SelectField 
{
    public Model $model;
    public string $attribute;
    public array $optionsValues = [];


    public function __construct($model, $attribute, $values = [])
    {
        $this->label = $attribute;
        $this->model = $model;
        $this->attribute = $attribute;
        $this->optionsValues = $values;
    }

    public function __toString()
    {
        return sprintf('
            <div class="form-groupe ">
                
                <select class="form-control">
                    %s
                </select>
                <div class="invalid-feedback">%s</div>
            </div>
        ',
            $this->addOption(),
            $this->model->getFirstError($this->attribute)
        );
    }

    public function addOption(): string
    {
        $str = '';
        foreach($this->optionsValues as $value)
        {
            $str .= '<option value='.$value.'>' . $value . '</option>';
        }
        return $str;
    }
}
