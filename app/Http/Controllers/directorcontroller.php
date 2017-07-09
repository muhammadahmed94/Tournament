<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Session;
use Redirect;
use DB;
use App\tournaments;

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
        $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $viewObject["tournaments"]=$tournaments;
        $viewObject["user"]=$this->getSessionData();  
         return View('directordashboard',$viewObject);
    }

    public function editTournament(Request $request, $id){
      $user=$this->getSessionData();
      $requestData=array();
      $requestData["tournamentId"]=$id;
      $requestData["user"]=$user;
      $requestData["tournamentData"]=DB::table('tournaments')->where('tournament_id', '=', $id)->get()->first();
    if(!!$requestData["tournamentData"] && !empty($requestData["tournamentData"])){
    return view("editTournamentDirector",$requestData);
      
    }else{
    // return view("editTournament",$requestData);
    // no record found view
      
    }
       }

    public function deleteTournament(Request $request, $id){
    DB::table('tournaments')->where('tournament_id', '=', $id)->delete();

    return redirect('director');
       }

     public function editTournamentInfoDirector(Request $request){
       $updatedInfo = Input::all();
       $tournament_id=$updatedInfo["tournament_id"]; 
       $name=$updatedInfo["tournament_name"]; 
       $date=date("Y-m-d", strtotime($updatedInfo["tournament_date"]));
       $location=$updatedInfo["tournament_location"];
       $dateend=date("Y-m-d", strtotime($updatedInfo["tournament_enddate"]));
       $description=$updatedInfo["tournament_description"];
       $longdescription=$updatedInfo["tournament_longdescription"];        
       DB::table('tournaments')->where('tournament_id', $tournament_id)->update([
      'tournament_name' => $name,
      'tournament_date' => $date,
      'tournament_dateend' => $dateend,
      'tournament_location' => $location,
      'tournament_longdescription' => $longdescription,
      'tournament_description' => $description
      ]);
       return redirect('director')->withInput();   
     }
     
      public function editCurrentUser(){
         $viewObject= array();

         $viewObject["user"]=$this->getSessionData();
            $userData=DB::table('users')
            ->where('id',$viewObject["user"]->id)->get()->first();
        $viewObject["user"]=$userData;
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
         
         return redirect('admin')->withInput();  
        // return view("editCurrentUser",$viewObject);

    }
    public function addNewTournament(){
        $viewObject["user"]= $this->getSessionData();
           return view("addNewTournamentDirector",$viewObject);
       }

       public function addNewTournamentWithPost(Request $request){
       $updatedInfo = Input::all();
       $title=$updatedInfo["title"];
       $description=$updatedInfo["description"];
       $longdescription=$updatedInfo["long_description"];
       $location=$updatedInfo["location"];
       $date=$updatedInfo["date"];
       $dateend=$updatedInfo["dateend"];
       //add mandatory field in if check..
       if($title){
       DB::table('tournaments')->insert([
      'tournament_name' => $title,
      'tournament_longdescription' => $longdescription,
      'tournament_date' => $date,
      'tournament_dateend' => $dateend,
      'tournament_description' => $description,
      'tournament_location' => $location
      ]);
       return redirect('director')->withInput();
       }   
     }

     public function viewTournament(Request $request, $id){
      
      $tournamentData = DB::table('tournament_teams')
            ->join('teams', 'tournament_team_id', '=', 'teams.team_id')
            ->where('tournament_id', '=', $id)
            ->select('team_name','team_id','team_rep')
            ->get();
      $viewObject= array();
      $viewObject["tournaments"]=$tournamentData;
      $viewObject["user"]=$this->getSessionData();
      if(!!$viewObject["tournaments"] && !empty($viewObject["tournaments"])){
    return view("viewTournament",$viewObject);
      
    }else{
     return view("editTournament",$requestData);
    // no record found view
      
    }
       }
    
}
