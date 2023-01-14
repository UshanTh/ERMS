<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Menu;   

class MenuController extends Controller
{
    //Admin side
    //-------------Menu function start-----------------
    //view Menu page
    public function admin_view_Menu()
    {
        $category_Record =  Category::all(); //get the all category table records

        //$data = Menu::all(); //get the all menu table records

        return view('admin.Menu', compact('category_Record'));
    }

    //add Menu 
    public function add_Menu(Request $request)
    {
        $menu_Data = new Menu; //menu model assign to $data
        
        //Variable name->column name = request->input name
        $menu_Data->menu_Name = $request-> Menu_Name;
        $menu_Data->Menu_Description = $request-> desc;
        $menu_Data->Category_id  = $request-> Category;
        $menu_Data->Price = $request-> Price;
        $menu_Data->Discount_price = $request-> discount_price;

        $image = $request->image; //storing the image variable

        $imagename = time().'.'.$image->getClientOriginalExtension(); //giving the unique name for image using time function

        $request->image->move('Menu', $imagename); //store image in the menu folder

        $menu_Data->image=$imagename;

        //save the data
        $menu_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Menu Added Successfully');
    }

    //show Menu page
    public function show_Menu()
    {
        $data = Menu::all(); //get the all menu table records

        return view('admin.Menu_details', compact('data'));
    }
    
    //delete menu
    public function delete_Menu($id)
    {
        $data = Menu::find($id); //find the id
        
        //delete the relevant record
        $data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Menu Deleted Successfully'); 
    }

     //edit menu
     public function edit_Menu($id)
     {
        $data = Menu::find($id); //find the id

        $category_Record =  Category::all(); //get the all category table record
        //  //delete the relevant record
        //  $data->delete();

        return view('admin.Edit_Menu', compact('data','category_Record'));
     }

     //update menu details
     public function update_Menu_confirm(Request $request,$id)
     {
        $data = Menu::find($id); //find the id

        //Variable name->column name = request->input name
        $data->menu_Name = $request-> Menu_Name;
        $data->Menu_Description = $request-> desc;
        $data->Category_id  = $request-> Category;
        $data->Price = $request-> Price;
        $data->Discount_price = $request-> discount_price;

        $image = $request->image; //storing the image variable

        if($image){ //avoid 'getClientOriginalExtension() on null' error
            $imagename = time().'.'.$image->getClientOriginalExtension(); //giving the unique name for image using time function

            $request->image->move('Menu', $imagename); //store image in the menu folder
    
            $data->image=$imagename;
        }

        //save the data
        $data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Menu Saved Successfully'); 
     }
    //-------------admin side Menu functions end-----------------

    
}
