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
use Underscore\Types\Arrays;

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
         Mail::send('mail', array('key' => 'value'), function($message)
{
    $message->to('muhammad_ahmed1994@outlook.com', 'John Smith')->subject('Welcome!');
});
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
      'title' => $name,
      'date_start' => $date,
      'date_end' => $dateend,
      'location' => $location,
      'comment' => $longdescription,
      'description' => $description
      ]);
       return redirect('admin')->withInput();   
     }
     
    public function viewTournament(Request $request, $id){
      $user = $this->getSessionData();
      
      $divisions =  $tournamentDataActive = DB::table('tournaments')
           ->join('tournaments_divisions','tournaments_divisions.tournament_id', '=', 'tournaments.tournament_id')
            ->where('tournaments_divisions.tournament_id','=',$id)
            ->get();
      
      $tournamentDataActive = DB::table('teams')
           ->join('tournament_teams','tournament_teams.team_id', '=', 'teams.team_id')
           ->join('team_registration','team_registration.teams_team_id', '=', 'teams.team_id')
            ->where([
            ['teams.tournament_id','=',$id],
            ['team_registration.status','=',1]
            ])
            ->distinct()
            ->get();
     
     echo $tournamentDataActive;
      $tournamentDataUnactive = DB::table('teams')
           ->join('tournament_teams','tournament_teams.team_id', '=', 'teams.team_id')
           ->join('team_registration','team_registration.teams_team_id', '=', 'teams.team_id')
            ->where([
            ['teams.tournament_id','=',$id],
            ['team_registration.status','=',0]
            ])
            ->distinct()
            ->get();
           
  //echo $tournamentDataUnactive;
      $viewObject= array();
     $viewObject["Divisions"]=$divisions;
      $viewObject["tournamentDataUnactive"]=$tournamentDataUnactive;
      $viewObject["tournamentDataActive"]=$tournamentDataActive;
      $viewObject["user"]=$this->getSessionData();

     if(!!$viewObject["tournamentDataActive"] && !empty($viewObject["tournamentDataActive"])){
    return view("admin/viewtournament",$viewObject);
      
    }
    else{
     return view("admin/editTournament",$requestData);
    // no record found view
      
    }
    //return view("team-rep/test",$user);
       }

       public function groupByKey($data,$keyLog){
       $returnData=array();
         foreach($data as $key=>$val){
             $returnDataInner=array();
           
           foreach($data as $keyInner=>$valInner){
             if($valInner==$val){
              
 
               $arrayKey="'".(String)$val->{$keyLog}."'";
               $returnDataInner[$arrayKey]=array();
               
              array_push($returnDataInner[$arrayKey],$val);
              
             }
              array_push($returnData,$returnDataInner[$arrayKey]);
              echo json_encode($returnDataInner);
               
           }
         }
         echo json_encode($returnData);
         return $returnData;
       }

       public function addNewTournament(){
        $viewObject["user"]= $this->getSessionData();
         return view("admin/addNewTournament",$viewObject);
       }
      public function parsedata($updatedInfo){
       $user=$this->getSessionData();
        $parsedResponsedDataArray=array();
        
        if(!empty($updatedInfo["Deposite"])&&count($updatedInfo["Deposite"])>0){
       for($i=0;$i<count($updatedInfo["Deposite"]);$i++){

          $parsedResponseData=array();
         
         $parsedResponseData["Division_Title"]=$updatedInfo["Division_Title"][$i];
         $parsedResponseData["Birth_Year"]=$updatedInfo["Birth_Year"][$i];
         $parsedResponseData["Boys/Girls"]=$updatedInfo["Boys/Girls"][$i];
         $parsedResponseData["Limit"]=$updatedInfo["Limit"][$i];
         $parsedResponseData["Level"]=$updatedInfo["Level"][$i];
         $parsedResponseData["Entry_Fee"]=$updatedInfo["Entry_Fee"][$i];
         $parsedResponseData["Deposite"]=$updatedInfo["Deposite"][$i];
         $parsedResponseData["Early_Bid"]=$updatedInfo["Early_Bid"][$i];
         $parsedResponseData["Early_Bid_Exp"]=$updatedInfo["Early_Bid_Exp"][$i];
        $parsedResponseData["Multi_Team"]=$updatedInfo["Multi_Team"][$i];
        $parsedResponseData["Canadian"]=$updatedInfo["Canadian"][$i];
         $parsedResponseData["Balanace_Due"]=$updatedInfo["Balanace_Due"][$i];
        $parsedResponseData["Balanace_Due_Date"]=$updatedInfo["Balanace_Due_Date"][$i];
          $parsedResponseData["Balanace_Team_Disc"]=$updatedInfo["Balanace_Team_Disc"][$i];
         $parsedResponseData["Balanace_Canada"]=$updatedInfo["Balanace_Canada"][$i];
       
        array_push($parsedResponsedDataArray,$parsedResponseData);

        }

        
       
        }
        else{

           $parsedResponseData=array();
        

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
        $parsedResponseData["Balanace_Due_Date"]="";
        $parsedResponseData["Balanace_Team_Disc"]="";
         $parsedResponseData["Balanace_Canada"]="";
         
         array_push($parsedResponsedDataArray,$parsedResponseData);
        }

        
         return $parsedResponsedDataArray;
      }

       public function addNewTournamentWithPost(Request $request){
       $updatedInfo = Input::all();
        // echo $updatedInfo;
       $user=$this->getSessionData();
       //echo json_encode($updatedInfo['Title']);

         DB::table('tournaments')->insert([
        'title' =>$updatedInfo['Title'],
        'description'=> $updatedInfo['Description'],
        'date_start'=> $updatedInfo['Start_Date'],
        'comment'=>$updatedInfo['Comment'],
        'location'=>$updatedInfo['Start_Date'],
        'date_end'=> $updatedInfo['End_Date'],
        'user_id' => $user['id']
        ]);
         
       
       $recieveDataArray=array();
       $recieveDataArray = $this->parsedata($updatedInfo);
      // echo $updatedInfo['Title'];
     $tournamentData =DB::table('tournaments')
          ->where('tournaments.title', $updatedInfo['Title'])
          ->first();
      //echo $tournamentData->tournament_id;
     
            //echo count($recieveDataArray);
         //echo json_encode($recieveDataArray);
      //echo json_encode($tournamentData['0']);
       for($i=0;$i<count($recieveDataArray);$i++){
         echo $i;
      DB::table('tournaments_divisions')->insert([
      'division_title'=>$recieveDataArray[$i]['Division_Title'],
      'birth_year'=>$recieveDataArray[$i]['Birth_Year'],
      'boys/girls'=>$recieveDataArray[$i]['Boys/Girls'],
      'limit_division'=>$recieveDataArray[$i]['Limit'], 
      'level'=>$recieveDataArray[$i]['Level'],
      'entry_fee'=>$recieveDataArray[$i]['Entry_Fee'],
       'early_bid' =>$recieveDataArray[$i]['Early_Bid'],
       'mutli_team' =>$recieveDataArray[$i]['Multi_Team'],
       'balance_due' =>$recieveDataArray[$i]['Balanace_Due'],
       'balance_team_disc'=>$recieveDataArray[$i]['Balanace_Team_Disc'],
       'tournament_id'=>$tournamentData->tournament_id
      ]);
       }
      $tournaments = tournaments::getalltournament();
            $viewObject= array();
            $viewObject["tournaments"]=$tournaments;
            $viewObject["user"]=$this->getSessionData();
            
            return view("admin/admindashboard",$viewObject);
       
      // return redirect('admin')->withInput();
        
     }


      public function editCurrentUser(){
         $viewObject= array();

         $viewObject["user"]=$this->getSessionData();
            $userData=DB::table('users')
            ->where('id',$viewObject["user"]->id)->get()->first();
        $viewObject["user"]=$userData;
        return view("admin/editCurrentAccountAdmin",$viewObject);
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

    public function Singleteam(Request $request, $id , $tid){
      $user=$this->getSessionData();
      $viewObject["user"]=$user;
      return view("team-rep/Tournamentinfo",$viewObject);
    }


   public function singletournamentinfo(){

    }

    public function acceptteam(Request $request, $id , $tid){
        echo $id.$tid;
        DB::table('team_registration')
            ->where(
             'teams_team_id','=', $id
              )
            ->update(['status' => 1]);
       return redirect()->back();
            
    }
   
}


// Safetychecks here