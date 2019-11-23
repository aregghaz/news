<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\News;
class HomeController extends Controller
{
    public function __construct( )
    {
        Session::has('applocale') ?: Session::put('applocale', 'am');

    }
   public function singIn(Request $request){
       $email = $request['email'];
       $password = $request['password'];

       if (Auth::attempt(['email' => $email, 'password' => $password])) {
           return redirect(route('dashboard'));
       }
       return redirect()->back();
   }
   public function logOut(){
      Auth::logout();
       return redirect(route('login'));
   }



}
