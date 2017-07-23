<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\tournaments;
use DB;
use Input;
use Validator;
use Mail;
use App\Mail\Reminder;

class admincontroller extends Controller
{
      public function __construct(){
      $this->middleware('auth');
      $user=$this->getSessionData();
     //echo json_encode($user);
     if(!!$user && !($user->user_role==HomeController::$adminRoleId)){
        Redirect::to('/')->send();
     }else if(!$user){
        Redirect::to('/')->send();
     }
    }

   
      private function getSessionData(){
        ;
        return Session::get('user');
    }

       public function viewDash(){
            $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $viewObject["tournaments"]=$tournaments;
            $viewObject["user"]=$this->getSessionData();
            
            return view("admin/admindashboard",$viewObject);
    }

    public function editTournament(Request $request, $id){
      $user=$this->getSessionData();
      $requestData=array();
      $requestData["tournamentId"]=$id;
      $requestData["user"]=$user;
      $requestData["tournamentData"]=DB::table('tournaments')->where('tournament_id', '=', $id)->get()->first();
    if(!!$requestData["tournamentData"] && !empty($requestData["tournamentData"])){
    return view("admin/editTournament",$requestData);
      
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
       $date=date("Y-m-d", strtotime($updatedInfo["tournament_date"]));
       $location=$updatedInfo["tournament_location"];
       $dateend=date("Y-m-d", strtotime($updatedInfo["tournament_enddate"]));
       $description=$updatedInfo["tournament_description"];
       $longdescription=$updatedInfo["tournament_longdescription"];        
       DB::table('tournaments')->where('tournament_id', $tournament_id)->update([
      'tournament_name' => $name,
      'tournament_date' => $date,
      'tournament_enddate' => $dateend,
      'tournament_location' => $location,
      'tournament_longdescription' => $longdescription,
      'tournament_description' => $description
      ]);
       return redirect('admin')->withInput();   
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
    return view("admin/viewTournament",$viewObject);
      
    }else{
     return view("admin/editTournament",$requestData);
    // no record found view
      
    }
       }

       public function addNewTournament(){
        $viewObject["user"]= $this->getSessionData();
         return view("admin/addNewTournament",$viewObject);
       }
      public function parsedata($updatedInfo){
        // {"_token":"UAPulJ7s7HhrO6EMGACkrbVU8Ajcu2bgaAViREwn","Title":"asdasd",
        // "Description":"asdsad","Location":"asdad","Comment":"asdad",
        // "Start_Date":"2017-07-14","End_Date":"2017-07-13","Division_Title":["asdasd"],
        // "Birth_Year":["asdas"],"Boys\/Girls":["asd"],"Limit":["asdas"],"Level":["asd"],
        // "Entry_Fee":"asda","Deposite":["asda"],"Early_Bid":["asdad"],"Early_Bid_Exp":["asdad"],
        // "Multi_Team":"asdsad","Canadian":["asdad"],"Balanace_Due":["asdsa"],"Balanace_Due_Date":["asdas"],
        // "Balanace_Team_Disc":["asdad"],"Balanace_Canada":["asda"],"submit":"Submit"}
        $parsedResponsedDataArray=array();
        
        if(!empty($updatedInfo["Deposite"])&&count($updatedInfo["Deposite"])>0){
       for($i=0;$i<count($updatedInfo["Deposite"]);$i++){
<<<<<<< HEAD
         $parsedResponseData=array();
         $parsedResponseData["title"]=$updatedInfo["Title"];
=======
          $parsedResponseData=array();
          $parsedResponseData["title"]=$updatedInfo["Title"];
>>>>>>> 111a5c15f032d34af209094a2ab67e520f65e693
         $parsedResponseData["Description"]=$updatedInfo["Description"];
         $parsedResponseData["Location"]=$updatedInfo["Location"];
         $parsedResponseData["Comment"]=$updatedInfo["Comment"];
         $parsedResponseData["Start_Date"]=$updatedInfo["Start_Date"];
         $parsedResponseData["End_Date"]=$updatedInfo["End_Date"];
         $parsedResponseData["Division_Title"]=$updatedInfo["Division_Title"][$i];
         $parsedResponseData["Birth_Year"]=$updatedInfo["Birth_Year"][$i];
         $parsedResponseData["Boys/Girls"]=$updatedInfo["Boys/Girls"][$i];
         $parsedResponseData["Limit"]=$updatedInfo["Limit"][$i];
         $parsedResponseData["Level"]=$updatedInfo["Level"][$i];
         $parsedResponseData["Entry_Fee"]=$updatedInfo["Entry_Fee"][$i];
         $parsedResponseData["Deposite"]=$updatedInfo["Deposite"][$i];
         $parsedResponseData["Early_Bid"]=$updatedInfo["Early_Bid"][$i];
         $parsedResponseData["Early_Bid_Exp"]=$updatedInfo["Early_Bid_Exp"][$i];
<<<<<<< HEAD
         $parsedResponseData["Multi_Team"]=$updatedInfo["Multi_Team"][$i];
         $parsedResponseData["Canadian"]=$updatedInfo["Canadian"][$i];
         $parsedResponseData["Balanace_Due"]=$updatedInfo["Balanace_Due"][$i];
         $parsedResponseData["Balanace_Due_Date"]=$updatedInfo["Balanace_Due_Date"][$i];
         $parsedResponseData["Balanace_Team_Disc"]=$updatedInfo["Balanace_Team_Disc"][$i];
=======
        $parsedResponseData["Multi_Team"]=$updatedInfo["Multi_Team"][$i];
        $parsedResponseData["Canadian"]=$updatedInfo["Canadian"][$i];
         $parsedResponseData["Balanace_Due"]=$updatedInfo["Balanace_Due"][$i];
        $parsedResponseData["Balanace_Due_Date"]=$updatedInfo["Balanace_Due_Date"][$i];
          $parsedResponseData["Balanace_Team_Disc"]=$updatedInfo["Balanace_Team_Disc"][$i];
>>>>>>> 111a5c15f032d34af209094a2ab67e520f65e693
         $parsedResponseData["Balanace_Canada"]=$updatedInfo["Balanace_Canada"][$i];
       
        array_push($parsedResponsedDataArray,$parsedResponseData);

        }

        
       
        }
        else{
<<<<<<< HEAD
         $parsedResponseData=array();
         $parsedResponseData["title"]=$updatedInfo["Title"];
=======
           $parsedResponseData=array();
          $parsedResponseData["title"]=$updatedInfo["Title"];
>>>>>>> 111a5c15f032d34af209094a2ab67e520f65e693
         $parsedResponseData["Description"]=$updatedInfo["Description"];
         $parsedResponseData["Location"]=$updatedInfo["Location"];
         $parsedResponseData["Comment"]=$updatedInfo["Comment"];
         $parsedResponseData["Start_Date"]=$updatedInfo["Start_Date"];
         $parsedResponseData["End_Date"]=$updatedInfo["End_Date"];

         $parsedResponseData["Division_Title"]="";
         $parsedResponseData["Birth_Year"]="";
         $parsedResponseData["Boys/Girls"]="";
         $parsedResponseData["Limit"]="";
         $parsedResponseData["Level"]="";
         $parsedResponseData["Entry_Fee"]="";
         $parsedResponseData["Deposite"]="";
         $parsedResponseData["Balanace_Due"]="";
         $parsedResponseData["Early_Bid"]="";
         $parsedResponseData["Early_Bid_Exp"]="";
         $parsedResponseData["Multi_Team"]="";
         $parsedResponseData["Canadian"]="";
<<<<<<< HEAD
         $parsedResponseData["Balanace_Due_Date"]="";
         $parsedResponseData["Balanace_Team_Disc"]="";
=======
          $parsedResponseData["Balanace_Due_Date"]="";
          $parsedResponseData["Balanace_Team_Disc"]="";
>>>>>>> 111a5c15f032d34af209094a2ab67e520f65e693
         $parsedResponseData["Balanace_Canada"]="";
         
         array_push($parsedResponsedDataArray,$parsedResponseData);
        }
        
         return $parsedResponsedDataArray;
      }

       public function addNewTournamentWithPost(Request $request){
       $updatedInfo = Input::all();
       //$this->parsedata($updatedInfo);
       $recieveDataArray=array();
       $recieveDataArray = $this->parsedata($updatedInfo);
       //echo json_encode($recieveDataArray);
      //print_r($recieveDataArray);
         //echo json_encode($updatedInfo);
       //add mandatory field in if check..
       for($i=0;$i<count($recieveDataArray);$i++){
        DB::table('tournaments')->insert([
<<<<<<< HEAD
       'title' => $recieveDataArray[$i]['title'],
       'division_title'=>$recieveDataArray[$i]['Division_Title'],
       'birth_year'=>$recieveDataArray[$i]['Birth_Year'],
       'boys/girls'=>$recieveDataArray[$i]['Boys/Girls'],
       'limit_division'=>$recieveDataArray[$i]['Division_Title'], 
       'level'=>$recieveDataArray[$i]['Level'],
       'entry_fee'=>$recieveDataArray[$i]['Entry_Fee'],
=======
      'title' => $recieveDataArray[$i]['title'],
      'division_title'=>$recieveDataArray[$i]['Division_Title'],
      'birth_year'=>$recieveDataArray[$i]['Birth_Year'],
      'boys/girls'=>$recieveDataArray[$i]['Boys/Girls'],
      'limit_division'=>$recieveDataArray[$i]['Division_Title'], 
      'level'=>$recieveDataArray[$i]['Level'],
      'entry_fee'=>$recieveDataArray[$i]['Entry_Fee'],
>>>>>>> 111a5c15f032d34af209094a2ab67e520f65e693
       'early_bid' =>$recieveDataArray[$i]['Early_Bid'],
       'mutli_team' =>$recieveDataArray[$i]['Multi_Team'],
       'balance_due' =>$recieveDataArray[$i]['Balanace_Due'],
       'balance_team_disc'=>$recieveDataArray[$i]['Balanace_Team_Disc'],
      ]);
      $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $viewObject["tournaments"]=$tournaments;
            $viewObject["user"]=$this->getSessionData();
            
            return view("admin/admindashboard",$viewObject);
       }
      // return redirect('admin')->withInput();
        
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

    public function Singleteam(){
      $user=$this->getSessionData();
      $viewObject["user"]=$user;
      return view("Singleteaminfo",$viewObject);
    }
    public function adminsingleteam(){
      return view("adminteamsuccess");
    }
   
}


// Safetychecks here