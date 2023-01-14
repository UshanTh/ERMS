<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //-------------User functions start-----------------
    //show_suppliers page
    public function view_User()
    {
        $data = User::all(); //get the all menu table records

        return view('admin.User_details', compact('data'));
    }

}
