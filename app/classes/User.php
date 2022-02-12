<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0=>[
                'id' => 1,
                'name' => 'Salahuddin',
                'email'=>'salahuddin@gmail.com',
                'password' =>'123456'
            ],
            1=>[
                'id' => 2,
                'name' => 'rafa',
                'email'=>'rafa@gmail.com',
                'password' =>'123456'
            ],
        ];
    }
}