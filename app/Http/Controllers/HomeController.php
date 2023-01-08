<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\ServiceProvider;

use App\Models\User;

use App\Models\Category; //add model 
use App\Models\Menu;  

class HomeController extends Controller
{
    //home page display function
    public function index(){
        return view('home.userpage');
    }
    //create a function for admin login
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){ //if user type equal to 1 goes to admin dashboard
            return view('admin.home');
        }
        else{                 //if user type equal to 0 goes to user page with user name]
            return view('home.userpage');
        }
    }

    //-------------Menu function start-----------------
    //view Menu page
    public function user_view_Menu()
    {
        $data = Menu::paginate(9); //get the all Category table records

        return view('home.Menu', compact('data'));
    }

}
