<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App;
use DB;
use Input;

class Alltournaments extends Controller
{
    public function fetchalltournaments(){
    	
    	$posts = DB::table('tournament')->get();
    	var_dump($posts);
    	$data=array();
    	$data["posts"]=$posts;
    	print("Alltournaments");	
    	return view('AlltournamentView',$data);
    	//return View::make("index")->with($posts);
    }


    public function delete(){
    	echo Input::all();
    }
    
}
