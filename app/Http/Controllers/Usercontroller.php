<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Usercontroller extends Controller
{
    //
    public function Create(){
    	return view('usercreate');
    }
    public function Store(Request $request){
    	User::create($request->all());
    	return"Data Enter Succesfully";
    	return $request->all();
    }
}
