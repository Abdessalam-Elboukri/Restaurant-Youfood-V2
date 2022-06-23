<?php

namespace app\core\form;
use app\core\Model;

class Field 
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_HIDDEN = 'hidden';
    public const TYPE_FILE = 'file';

    public string $type;
    public Model $model;
    public string $attribute;

    public function __construct($model, $attribute,)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                
                <input type="%s" name="%s" value="%s" class="form-control%s">
                <div class="invalid-feedback">%s</div>
            </div>
        ', 
            // $this->attribute,
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
    
    public function hiddenField()
    {
        $this->type = self::TYPE_HIDDEN;
        return $this;
    } 

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    } 
}