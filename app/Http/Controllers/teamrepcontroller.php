<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Session;
use App\tournaments;
use Redirect;
use DB;
class teamrepcontroller extends Controller
{
      public function __construct(){
          $this->middleware('auth');
          $user=$this->getSessionData();
          if(!($user->user_role==HomeController::$teamRepRoleId)){
           Redirect::to('/')->send();
     }
    }

    private function getSessionData(){
        return Session::get('user');
    }


       public function viewDash(){
           $viewObject= array();
           $viewObject["user"]=$this->getSessionData();
           return view("team-rep/teamrepdashboard",$viewObject);
    }
       public function editeamrepdata(Request $request ,$id){
        $requestdata = DB::table('organisation_info')
            ->join('users', 'user_id', '=', 'users.id')
            ->where('user_id', '=', $id)
            ->get()->all();
           $viewObject= array();
           $viewObject["userdata"]=$requestdata;
           $viewObject["user"]=$this->getSessionData();
           //echo json_encode($viewObject["userdata"]);
            return view("editteamdashoard",$viewObject);
    }
       public function editeamrep(Request $request ,$id){
        
           return view("teamrepdashboard");
    }
    public function editeamrepinfo(){
       
         return view("mail");
    }

    public function editCurrentUser(){
         $viewObject= array();

         $viewObject["user"]=$this->getSessionData();
            $userData=DB::table('users')
            ->where('id',$viewObject["user"]->id)->get()->first();
        $viewObject["user"]=$userData;
        return view("team-rep/editCurrentUser",$viewObject);
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
     public function Event(){
       $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
      return view("team-rep/Tournamentinfo");
    }
    public function teamStatus(Request $request=null, $teamid=id , $tournament_id=tid){
      $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
        $userdata = DB::table('teams')->get();
        $tournament =  $teamData = DB::table('tournaments')
            ->where('tournament_id', '=', $tournament_id)
            ->get();
        $teamData = DB::table('teams')
            ->join('team_registration', 'team_id', '=', 'teams_team_id')
            ->where('team_id', '=', $teamid)
            ->select('Deposit')
            ->get();
        $viewObject['teamdata']=$teamData;
        $viewObject['tournaments']=$tournament;
     // echo $tournament;
      return view("team-rep/Eventinfo", $viewObject);
    }
    
    public function adddata(){
        
      if(Input::hasFile('certified_roster')){
            $file = Input::file('certified_roster');
            $file->move('uploads',$file->getClientOriginalName());
            $userFileName="uploads/".$file->getClientOriginalName();
            $user=Session::get('user');

            DB::table('team_registration')
            ->where('id', $user->$teamid)
            ->update(['imagepath' => $userFileName]);
            return redirect()->route('myteams', ['message' => "image uploaded sucessfully"]);
    }
    else{
        echo "Image not uploaded";
        //return redirect()->route('home', ['message' => "image not found"]);
    }
    }
    public function Singleteam(){
      $user=$this->getSessionData();

      $viewObject["user"]=$user;
      return view("Singleteaminfo",$viewObject);
    }
    public function addNewTeam(){
       $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $viewObject["tournaments"]=$tournaments;
            //echo $viewObject['tournaments'];
      return view("addNewTeam",$viewObject);
    }
   public function addNewTeamInfo(){
    $user=$this->getSessionData();
    $data = Input::all();


    $TeamName = $data["Team_Name"];
    $Phone_1 = $data["Team_Phone#1"];
    $Phone_2 = $data["Team_Phone#2"];
    $Team_email = $data["Team_Email"];
    $TeamRep_Name = $data["Team_RepName"];
    $tournament_id = $data["Tournament_Name"];
    $Organization_Name=$data["Organization_Name"];
    $Billing_Address=$data["Billing_Address"];
    $Website_URL=$data["Website_URL"];
    $City=$data["City"];
    $State=$data["State"];
    $Zone=$data["Zone"];
    $Country=$data["Country"];
    $Facebook=$data["Facebook"];
    $Instagram=$data["Instagram"];
    $Twitter=$data["Twitter"];



    //echo $user['id'];
     DB::table('teams')->insert([
      'tournament_id' => $tournament_id,
      'team_name' => $TeamName,
      'team_rep' => $TeamRep_Name,
      'team_rep_email' => $Team_email,
      'phone#1' => $Phone_1,
      'phone#2' => $Phone_2,
      'Organization Name' => $Organization_Name,
      'Billing Address' => $Billing_Address,
      'Website URL' => $Website_URL,
      'City' => $City,
      'State' => $State,
      'Zone' => $Zone,
      'Country' => $Country,
      'Facebook' => $Facebook,
      'Instagram' => $Instagram,
      'Twitter' => $Twitter,
      'user_id' => $user['id']
      ]);
     
     $user=$this->getSessionData();
     $tournaments = tournaments::getalltournament();
     $viewObject["user"]=$user;
     $viewObject["tournaments"]=$tournaments;
     $viewObject["teams"]=DB::table('teams')
            ->where('user_id', $user['id'])->get();
            //echo $viewObject["teams"];
     return view("team-rep/myteams",$viewObject);
   }
   public function myteams(){
            $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
    $viewObject["teams"]=DB::table('teams')
            ->where('user_id', $user['id'])->get();
            echo $user;
     return view("team-rep/myteams",$viewObject);
   }
}
