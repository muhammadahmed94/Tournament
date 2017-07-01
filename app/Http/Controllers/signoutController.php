<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Redirect;
use Cache;
class signoutController extends Controller
{
    //
    public function logout(){
     
        Auth::logout();
    Cache::flush();
    return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }
}
