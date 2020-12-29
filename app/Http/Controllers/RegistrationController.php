<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Buyer;
use App\Models\Buying;
use App\Models\Supplier;
use App\Models\Manufacturer;
use App\User;


class RegistrationController extends Controller
{
    public function add_buyer(Request $request){
    	$validated = $request->validate([
        'first_name' => 'required|max:30',
        'last_name' => 'required|max:30',
        'mobile' => 'required|max:11',
        'email' => 'required|unique:users|max:50', 
        'password' => 'min:8|required_with:confirm_password|same:confirm_password',
        'confirm_password'=> 'min:8',  
        'address'   => 'nullable|max:250',
        'country' =>'required', 
    ]);
    	$user=new User();
      $buyer=new Buyer(); //creating object
      	$user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
      	$user->address=$request->address;
        $user->user_type=1;
      	$user->save();
      	$buyer->mobile=$request->mobile;
        $buyer->country=$request->country;
        $buyer->user_id=$user->id;
        $buyer->unique_id='B-'.date('ds').rand(1001,9999);
      	$buyer->save();
      	return back();
    }

     public function add_buying_house(Request $request){
      $validated = $request->validate([
        'first_name' => 'required|max:30',
        'last_name' => 'required|max:30',
        'mobile' => 'required|max:11',
        'email' => 'required|unique:users|max:50', 
        'password' => 'min:8|required_with:confirm_password|same:confirm_password',
        'confirm_password'=> 'min:8',  
        'address'   => 'nullable|max:250',
        'country' =>'required', 
    ]);
      $user=new User();
      $buying=new Buying(); //creating object
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->address=$request->address;
        $user->user_type=2;
        $user->save();
        $buying->mobile=$request->mobile;
        $buying->country=$request->country;
        $buying->user_id=$user->id;
        $buying->unique_id='BH-'.date('ds').rand(1001,9999);
        $buying->save();
        return back();
    }

      public function add_supplier(Request $request){
      $validated = $request->validate([
        'first_name' => 'required|max:30',
        'last_name' => 'required|max:30',
        'mobile' => 'required|max:11',
        'email' => 'required|unique:users|max:50', 
        'password' => 'min:8|required_with:confirm_password|same:confirm_password',
        'confirm_password'=> 'min:8',  
        'address'   => 'nullable|max:250',
        'country' =>'required', 
    ]);
      $user=new User();
      $supplier=new Supplier(); //creating object
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->address=$request->address;
        $user->user_type=3;
        $user->save();
        $supplier->mobile=$request->mobile;
        $supplier->country=$request->country;
        $supplier->user_id=$user->id;
        $supplier->unique_id='S-'.date('ds').rand(1001,9999);
        $supplier->save();
        return back();
    }

      public function add_manufacturer(Request $request){
      $validated = $request->validate([
        'first_name' => 'required|max:30',
        'last_name' => 'required|max:30',
        'mobile' => 'required|max:11',
        'email' => 'required|unique:users|max:50', 
        'password' => 'min:8|required_with:confirm_password|same:confirm_password',
        'confirm_password'=> 'min:8',  
        'address'   => 'nullable|max:250',
        'country' =>'required', 
    ]);
      $user=new User();
      $manufacturer=new Manufacturer(); //creating object
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->address=$request->address;
        $user->user_type=4;
        $user->save();
        $manufacturer->mobile=$request->mobile;
        $manufacturer->country=$request->country;
        $manufacturer->user_id=$user->id;
        $manufacturer->unique_id='M-'.date('ds').rand(1001,9999);
        $manufacturer->save();
        return back();
    }

}
