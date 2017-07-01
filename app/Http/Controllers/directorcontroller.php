<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

class directorcontroller extends Controller
{
  public function __construct(){
    $this->middleware('auth');
       $user=$this->getSessionData();
       if(!($user->user_role==HomeController::$directorRoleId)){
       Redirect::to('/')->send();
     }
    }

     private function getSessionData(){
        return Session::get('user');
    }

       public function viewDash(){
         return view("directordashboard");
    }

    
}
