<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class HomeController extends Controller
{

    public static $adminRoleId=1;
    public static $teamRepRoleId=2;
    public static $directorRoleId=3;
    protected $redirectUrl="/";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $user = Auth::User();
    Session::put('user', $user);
    $user=Session::get('user');
    if($user->user_role==HomeController::$adminRoleId){
        $this->redirectUrl="/admin";
    }else if($user->user_role==HomeController::$teamRepRoleId){
        $this->redirectUrl="/team-rep";
    }else if($user->user_role==HomeController::$directorRoleId){
        $this->redirectUrl="/director";
    }
        return redirect($this->redirectUrl);
    }
}
