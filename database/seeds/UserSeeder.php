<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::where("email","az.asifislam@gmail.com")->first();
        if(is_null($user)){
	        User::create([
                "first_name"=>"Asif islam",
	        	"last_name"=>"Asif islam",
                "email"=>"az.asifislam@gmail.com",
                "address"=>"Dhaka bangladesh",
	        	"photo"=>" ",
                "password"=>bcrypt("123456"),
                "user_type"=>"1",
	        	"status"=>1,
	        ]);
        }
    }
}
