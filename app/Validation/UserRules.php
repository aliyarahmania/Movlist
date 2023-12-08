<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }
    public function validateUser(String $str, String $fields, array $data){
        $model = new UserModel();
        $user = $model->where('username', $data['username'])->first();
        if(!$user){
            return false;
        }
        return password_verify($data['password'], $user['password']);
    }
}
