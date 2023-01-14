<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\ServiceProvider;

use App\Models\User;

use App\Models\Category; //add model 
use App\Models\Menu;  
use App\Models\Cart;  
use App\Models\Orders;  

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
        else if($usertype == '2'){
            return view('admin.home');
        }
        else{                 
            $data = Menu::paginate(9);
            return view('home.Menu', compact('data'));
        }
    }

    //-------------Menu function start-----------------
    //view Menu page
    public function view_Menu()
    {
        $data = Menu::paginate(9); //get the all Category table records

        return view('home.Menu', compact('data'));
    }

    //-------------user Menu function start-----------------
    //view Menu page
    public function Menu_details($id)
    {
        $Menu_data = Menu::find($id); //get the menu records

        return view('home.Menu_details',compact('Menu_data'));
    }

    //add to cart page
    public function add_cart(Request $request,$id)
    {
        if(Auth::id()){
            $user=Auth::user();

            $menu = Menu::find($id);

            $Cart = new cart;

            $Cart->user_id  = $user->id;
            $Cart->username = $user->name;
            $Cart->email = $user->email ;
            $Cart->tell_no  = $user->tell_no;

            $Cart->Menu_id = $menu->id;
            $Cart->Menu_name = $menu->menu_Name;
            $Cart->Qty = $request->Qty;

            //make sure if meal has a discount price
            if($menu->Discount_price!=null) //if meal has a discount price
            {
                $Cart->Price = $menu->Discount_price * $request->Qty; //store discount with the multiply by qty in the cart table
            }
            else //if doesnt 
            {
                $Cart->Price = $menu->Price * $request->Qty; //normal price store in the cart table 
            }
            
            $Cart->Image = $menu->Image;

            $Cart->save();
            return redirect()->back();

        }
        else{
            return redirect('login');
        }
    }

    //shiw cart page
    public function show_Cart()
    {
        if(Auth::id())
        {
            $user_id = Auth::user()->id; //logged user id
            $Cart=cart::where('user_id', '=',$user_id)->get();
            // $Cart_data = Cart::all(); //get the menu records

            return view('home.Cart_details',compact('Cart', 'user_id') );
        }
        else
        {
            return redirect('login');
        }

        
    }

    //Cart Inventory
    public function remove_Cart($id)
    {
        $Cart_Data = Cart::find($id); //find the id
        
        //delete the relevant record
        $Cart_Data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Cart Deleted Successfully'); 
    }


}
