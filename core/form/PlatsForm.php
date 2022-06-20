<?php

namespace app\core\form;
use app\core\Model;

class Field 
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_RADIO = 'radio';

    public string $type;
    public Model $model;
    public string $attribute;

    public function __construct($model, $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
        //     <div class="form-group">
        //         <label>%s</label>
        //         <input type="%s" name="%s" value="%s" class="form-control%s">
        //         <div class="invalid-feedback">%s</div>
        //     </div>

        //     <div class="col-md-3 col-9 shadow border-0 overflow-hidden" >
        //     <input type="radio" id="entrer-1" class=" d-none input1" name="entrer">
        //         <label for="entrer-1" class="label1">
        //             <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
        //             <div class="plats-info p-2">
        //                 
        // ', 
            $this->attribute,
            $this->type,
            $this->attribute, 
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }   
}