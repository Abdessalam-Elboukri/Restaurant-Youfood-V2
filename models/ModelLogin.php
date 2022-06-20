<?php

namespace app\models;

use app\core\Model;

class ModelLogin extends Model
{

    public string $email =  '';
    public string $password = '';


    public function tableName(): string
    {
        return 'users';
    }


    public function rules(): array
    {
        return [

            'email' => [self::RULE_REQUIRED], 
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' =>6 ], [self::RULE_MAX, 'max' => 24]]];
    }

    public function attributes(): array
    {
        return ['email', 'password'];
    }
    public function login(){
            $user_login = User::FindOne(['email' => $this->email]);
            if(!$user_login){
                $this->addErrorLogin('email', 'Wrong email');
                return false;
                }
            if($user_login->password !== $this->password){
                $this->addErrorLogin('password', 'Wrong password');
                return false;
                }
                $_SESSION['user_id'] = $user_login->id_user;
                $_SESSION['user_fname'] = $user_login->firstname;
                $_SESSION['user_lname'] = $user_login->lastname;
                $_SESSION['user_picture'] = $user_login->picture;
                $_SESSION['user_role'] = $user_login->fk_role;
             return true;
            }

}
