<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\tournaments;


class admincontroller extends Controller
{
      public function __construct(){
      $this->middleware('auth');
     $user=$this->getSessionData();
     if(!!$user && !($user->user_role==HomeController::$adminRoleId)){
        Redirect::to('/')->send();
     }else if(!$user){
        Redirect::to('/')->send();
     }
    }

      private function getSessionData(){
        return Session::get('user');
    }

       public function viewDash(){
            $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $viewObject["tournaments"]=$tournaments;
            $viewObject["user"]=$this->getSessionData();


           return view("admindashboard",$viewObject);
    }

   
}
