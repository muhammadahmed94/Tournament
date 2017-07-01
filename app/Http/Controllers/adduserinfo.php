<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use Session;

class adduserinfo extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){

         $name = Input::get("name");
         $email = Input::get("email");
         echo($name);
        
        if(Input::hasFile('userImage')){
            $file = Input::file('userImage');
            $file->move('uploads',$file->getClientOriginalName());
            $userFileName="uploads/".$file->getClientOriginalName();
            $user=Session::get('user');

            DB::table('users')
            ->where('id', $user->id)
            ->update(['imagepath' => $userFileName, 'name' => $name , 'email' => $email]);
            return redirect()->route('home', ['message' => "image uploaded sucessfully"]);
    }
    else{
        echo "Image not uploaded";
        return redirect()->route('home', ['message' => "image not found"]);
    }
    }


    public function listUser(){
        $users=DB::table('users')->get();
            return view('usersList', ['users' => $users]);
    }

    public function deleteUser(Request $request, $id){
    DB::table('users')->where('id', '=', $id)->delete();
    return redirect()->back();
       }
}
