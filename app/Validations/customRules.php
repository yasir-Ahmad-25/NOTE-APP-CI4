<?php 

namespace App\Validations;
use App\Models\UserModel;

class CustomRules {
    

    public function validateUser(string $str, string $fields , array $data){

        $model = new UserModel();
        // $user = $model->where('Email',$data['Email'])->first();
        $user = $model->where('username',$data['username'])->where('password',$data['password'])->first();

        if(!$user){
            return false;
        }

        return true;
    }
}