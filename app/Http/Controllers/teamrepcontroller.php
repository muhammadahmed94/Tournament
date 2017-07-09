<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Session;
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
           return view("teamrepdashboard",$viewObject);
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
        /*$requestdata = DB::table('organisation_info')
            ->join('users', 'user_id', '=', 'users.id')
            ->where('user_id', '=', $id)
            ->get()->all();
          //echo json_encode($requestdata);
            $user=$this->getSessionData();
            $viewObject["requestdata"]=$requestdata;
            $viewObject["user"]=$user;
            echo json_encode($viewObject);*/
           return view("teamrepdashboard");
    }
    public function editeamrepinfo(){
       // $data = Input::all();
         //echo json_encode($data);
        // echo ("sdasdas");
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
      return view("Eventinfo");
    }

    public function Singleteam(){
      $user=$this->getSessionData();
      $viewObject["user"]=$user;
      return view("Singleteaminfo",$viewObject);
    }
   
}
