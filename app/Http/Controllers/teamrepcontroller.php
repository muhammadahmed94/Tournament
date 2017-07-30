<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Input;
use Session;
use App\tournaments;
use Redirect;
use DB;
use File;


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
           $user = $this->getSessionData();
           $viewObject["user"]=$user;
           $requestdata = DB::table('teams')
            ->join('tournaments', 'teams.tournament_id', '=', 'tournaments.tournament_id')
            ->get()->all();
            $viewObject["tournaments"]=$requestdata;
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

      return view("team-rep/Tournamentinfo", $viewObject);
    }

    public function teamStatus(Request $request=null, $teamid=id , $tournament_id=tid){
      $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
        $userdata = DB::table('teams')->get();
        $tournament= DB::table('tournaments')
            ->where('tournament_id', '=', $tournament_id)
            ->get();
        $teamData = DB::table('teams')
            ->join('team_registration', 'team_id', '=', 'teams_team_id')
            ->where('team_id', '=', $teamid)
            //->select('Deposit')
            ->get();
        $viewObject['teamdata']=$teamData;
        $viewObject['tournaments']=$tournament;
      return view("team-rep/Eventinfo", $viewObject);
    }
    
    public function adddata(){
        
      if(Input::hasFile('certified_roster')){
            $file = Input::file('certified_roster');
            $file->move('uploads',$file->getClientOriginalName());
            $userFileName="uploads/".$file->getClientOriginalName();
            $user=Session::get('user');
            echo $user;
            DB::table('team_registration')
            //->where('teams_team_id', $user->$teamid)
            ->update(['Certified_roster' => $userFileName]);
           //return redirect()->route('myteams', ['message' => "image uploaded sucessfully"]);
           
    }
    
    else{
        echo "Image not uploaded";
        //return redirect()->route('home', ['message' => "image not found"]);
    }
    echo "abcc"; 
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
       $divisons = DB::table('tournaments_divisions')->get(); 
      // echo $divisons;
       $viewObject["divisons"]=$divisons;
            return view("team-rep/addNewTeam",$viewObject);
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
    $divison_id = $data["Divisions_Name"];


    
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
      $team_id = DB::table('teams')->where('team_id', DB::raw("(select max(`team_id`) from teams)"))->get();
      $team_id=$team_id[0]->team_id;
     $user=$this->getSessionData();
     $tournaments = tournaments::getalltournament();
     $viewObject["user"]=$user;
     $viewObject["tournaments"]=$tournaments;
    
    
     $viewObject["teams"]=DB::table('teams')
            ->where('user_id', $user['id'])->get();
    
            //echo $viewObject["teams"];
    DB::table('tournament_teams')->insert([
        'team_id'=>$team_id,
        'tournament_id'=>$tournament_id,
        'division_id'=> $divison_id
    ]);
    
    DB::table('team_registration')->insert([
        'teams_team_id'=>$team_id,
        'tournament_id'=>$tournament_id
    ]);
     return view("team-rep/myteams",$viewObject);
   }

   public function myteams(){
            $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $viewObject["teams"]=DB::table('teams')
            ->where('user_id', $user['id'])->get();
            //echo $viewObject["teams"];
     return view("team-rep/myteams",$viewObject);
   }

   public function getDivisions($id){
    $inputData=Input::all();
    $viewObject= array();
    $viewObject["divisions"]=DB::table('tournaments_divisions')
            ->where('tournament_id',$id)->get();
            //donot comment this echo
   echo json_encode($viewObject);
   }

   public function viewteamdashboard(Request $request ,$id){
     $viewObject= array();
     $inputData=Input::all();
     //echo json_encode($inputData);
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $viewObject["teams"]=DB::table('teams')
            
            ->where('team_id', $id)->get()->first();

             $viewObject["teamplayers"]=DB::table('team_players')
             ->where('team_id', $id)->get();
           // echo $viewObject["teamplayers"];
    return view('team-rep/single_team_info',$viewObject);
   }
   public function Editteamdashboard(){
    // myfile
            $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $data = Input::all();
           
       
$birth_year=$data['birth_year'];
$coach_name=$data['coach_name'];
$player_level=$data['player_level'];
$coach_email=$data['coach_email'];
$coach_phone=$data['coach_phone'];
$id=$data['team_id'];
 echo json_encode($data);

if(Input::hasFile('ceritfied_roster_file')){
echo "if";
    $file = Input::file('ceritfied_roster_file');
    $file->move('uploads',$file->getClientOriginalName());
    $ceritfied_roster="uploads/".$file->getClientOriginalName();
$ceritfied_roster= $ceritfied_roster;
}
else{
    echo "<zcxczzcxcz>";

$ceritfied_roster=$data['ceritfied_roster_link'];
}
if(Input::hasFile('travel_permit_file'))
{
$file = Input::file('travel_permit_file');
    $file->move('uploads',$file->getClientOriginalName());
    $travel_permit_file="uploads/".$file->getClientOriginalName();
$travel_permit=$travel_permit_file;}
else{
    $travel_permit=$data['travel_permit_link'];
}
echo $travel_permit.$ceritfied_roster;
        DB::table('teams')
        ->where('team_id', $id)
        ->update([
            'birth_year'=> $birth_year,
        'head_coach_name'=> $coach_name,
        'player_level'=> $player_level,
        'head_coach_email'=> $coach_email,
        'head_coach_phone'=> $coach_phone,
        'certified_roster'=> $ceritfied_roster,
        'travel_permit'=> $travel_permit
        ]);

       /*  $viewObject["teams"]=DB::table('teams')
            ->where('team_id', $team_id)->get()->first();*/

        /*if(Input::hasFile('certified_roster')){
            $file = Input::file('certified_roster');
            $file->move('uploads',$file->getClientOriginalName());
            $userFileName="uploads/".$file->getClientOriginalName();
            DB::table('teams')
            ->where('user_id', $user->id)
            ->update(['certified_roster' => $userFileName]);
            $viewObject["message"]="data uploaded succesfully";
            return redirect('viewteamdashboard/'.$team_id)->withInput(['message' => "image uploaded sucessfully"]); 
            }else{
              $viewObject["message"]="data not uploaded succesfully";
             return redirect('viewteamdashboard/'.$team_id)->withInput(['message' => "image uploaded sucessfully"]); 
            }*/
         $viewObject= array();
        //  return redirect()->back();
     }
   public function editaccount(){
          $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
      return View('team-rep/editTeamrep',$viewObject);
   }
   public function updateeditaccount(){
     $viewObject= array();
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $data = Input::all();
            $name = ["name"];
            $phone1 = ["phone1"];
          $name = $data["name"];
          $phone1 = $data["phone1"];
          $email  = $data["email"];
          $phone2 = $data["phone2"];
          $org_name = $data["org_name"];
          $bill_address = $data["bill_address"];
          $web_url  = $data["web_url"];
          $city = $data["city"];
          $state  = $data["state"];
          $zone = $data["zone"];
          $country  = $data["country"];
          $facebook = $data["facebook"];
          $instagram  = $data["instagram"];
          $twitter  = $data["twitter"];

          //insert into database
          DB::table('team_representative')->insert([
          //'team_name' => $TeamName,
          'name' => $name,
          'email' => $email,
          'phone#1' => $phone1,
          'phone#2' => $phone2,
          'organization_name' => $org_name,
          'billing_address' => $bill_address,
          'website_url' => $web_url,
          'city' => $city,
          'state' => $state,
          'zone' => $zone,
          'country' => $country,
          'facebook' => $facebook,
          'instagram' => $instagram,
          'twitter' => $twitter,
          'user_id' => $user['id']

      ]);
          echo "Update succesfully";
          return view('team-rep/editTeamrep',$viewObject);
   }
   public function addplayer(){
       $id=20;
        $viewObject= array();
     $inputData=Input::all();
     //echo json_encode($inputData);
            $user=$this->getSessionData();
            $viewObject["user"]=$user;
            $viewObject["teams"]=DB::table('teams')->first();
            //->where('team_id', $id)->get()->first();
       return view('team-rep/addplayer',$viewObject);
   }
    public function addplayerdata(){
        $data = Input::all();
        echo json_encode($data);

         $user=$this->getSessionData();
        $parsedResponsedDataArray=array();
        
        if(!empty($data["name"])&&count($data["position"])>0){
       for($i=0;$i<count($data["position"]);$i++){
            $parsedResponseData=array();
         $parsedResponseData["title"]=!!$data["title"][$i]?$data["title"][$i]:"";
         $parsedResponseData["name"]=$data["name"][$i];
         $parsedResponseData["position"]=$data["position"][$i];
         array_push($parsedResponsedDataArray,$parsedResponseData);
            }
        for($i=0;$i<count($parsedResponsedDataArray);$i++){
         //echo $i;
      DB::table('team_players')->insert([
      'title'=>$parsedResponsedDataArray[$i]['title'],
      'name'=>$parsedResponsedDataArray[$i]['name'],
      'position'=>$parsedResponsedDataArray[$i]['position'],
      'team_id'=>$data["team_id"]
      
      ]);
        }
        //echo json_encode($parsedResponseData);
        }
         return redirect()->back();
   }
   public function updateroster(Request $request ,$id,$tid,$type){
    //   Request::file("logo");
// echo $id.$tid.$type;
       $inputData=Input::all();
        /*$dataArray = array(
            ["teams_team_id"=>$id],
            ["tournament_id"=>$tid]
            )*/
if($type == "certified"){
       if(Input::hasFile('file')){
            $file = Input::file('file');
          // echo  $file->getClientOriginalName();
            $file->move('uploads',$file->getClientOriginalName());
             DB::table('team_registration')
           ->where(
               [['teams_team_id', $id],
               ['tournament_id', $tid]]
               )
            ->update(['Certified_roster' => $file->getClientOriginalName()]);
            $viewObject["message"]="data uploaded succesfully";
            }
    }
elseif($type == "program"){
        if(Input::hasFile('file')){
            $file = Input::file('file');
          // echo  $file->getClientOriginalName();
            $file->move('uploads',$file->getClientOriginalName());
             DB::table('team_registration')
           ->where(
               [['teams_team_id', $id],
               ['tournament_id', $tid]]
               )
            ->update(['Program_book_roster' => $file->getClientOriginalName()]);
            $viewObject["message"]="data uploaded succesfully";
            }
    }
   }

            public function get_division(){
                $tournament_divisions = tournament_divisions::getalltournament();
               // echo $tournament_divisions;
            }
}

