<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class tournaments extends Model
{
    //

    public static function getalltournament(){
        $posts = DB::table('tournaments')->get();
        return $posts;
    }
}
