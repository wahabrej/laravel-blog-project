<?php


namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   public function index()
   {
    if(Auth::id()){
        $data=Posts::all();
        if(Auth::user()->usertype =='user'){
           return view('user.home',compact("data"));
        }else if(Auth::user()->usertype =='admin'){

            return view('controll.home');

        }

    }
    else{
        return redirect()->back();
    }
   }
   public function homepage(){
    $data=Posts::all();

    return view("home.homepage",compact("data"));
   }

   public function postdetail($id)
   {
    $data=Posts::find($id);
    return view("home.postdetail",compact("data"));
   }
    
}
