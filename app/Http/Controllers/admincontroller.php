<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\tournaments;
use DB;
use Input;


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

    public function editTournament(Request $request, $id){
    // DB::table('users')->where('id', '=', $id)->delete();
    // return redirect()->back();
    $requestData=array();
    $requestData["tournamentId"]=$id;
    $requestData["tournamentData"]=DB::table('tournaments')->where('tournament_id', '=', $id)->get()->first();
    if(!!$requestData["tournamentData"] && !empty($requestData["tournamentData"])){
    return view("editTournament",$requestData);
      
    }else{
    // return view("editTournament",$requestData);
    // no record found view
      
    }
       }

    public function deleteTournament(Request $request, $id){
    DB::table('tournaments')->where('tournament_id', '=', $id)->delete();
    return redirect()->back();
       }

     public function editTournamentInfo(Request $request){
       $updatedInfo = Input::all();
       $tournament_id=$updatedInfo["tournament_id"]; 
       $name=$updatedInfo["tournament_name"];     
       DB::table('tournaments')->where('tournament_id', $tournament_id)->update([
      'tournament_name' => $name
      ]);
       return redirect('admin')->withInput();   
     }
     
    public function viewTournament(Request $request, $id){
      $tournamentData=DB::table('tournaments')->where('tournament_id', '=', $id)->get()->first();
      $viewObject= array();
      $viewObject["tournaments"]=$tournamentData;

      if(!!$viewObject["tournaments"] && !empty($viewObject["tournaments"])){
    return view("viewTournament",$viewObject);
      
    }else{
    // return view("editTournament",$requestData);
    // no record found view
      
    }
       }

       public function addNewTournament(){
         return view("addNewTournament");
       }

       public function addNewTournamentWithPost(Request $request){
       $updatedInfo = Input::all();
       $name=$updatedInfo["tournament_name"];     
       DB::table('tournaments')->insert([
      'tournament_name' => $name
      ]);
       return redirect('admin')->withInput();   
     }


      public function editCurrentUser(){
         $viewObject= array();
         $viewObject["user"]=$this->getSessionData();
        return view("editCurrentUser",$viewObject);
      }


       public function editAccountDetails(){

         $data = Input::all();
        $accountId=$data["accountId"];
        $name=$data["name"];
        $email=$data["email"];
        if(Input::hasFile('userImage')){
            $file = Input::file('userImage');
            $file->move('uploads',$file->getClientOriginalName());
            $userFileName="uploads/".$file->getClientOriginalName();

             DB::table('users')
            ->where('id', $accountId)
            ->update(['imagepath' => $userFileName, 'name' => $name , 'email' => $email]);
            }else{
              
               DB::table('users')
            ->where('id', $accountId)
            ->update(['name' => $name , 'email' => $email]);
            }
           
            $viewObject= array();
         $viewObject["user"]=$this->getSessionData();
        return view("editCurrentUser",$viewObject);

    }
   
}


// Safetychecks here