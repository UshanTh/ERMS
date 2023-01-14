<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //-------------Category function start-----------------
    //view Category page
    public function view_Category()
    {
        $data = Category::all(); //get the all Category table records

        return view('admin.Category', compact('data'));
    }

    //add Category page
    public function add_Category(Request $request)
    {
        $data = new Category; //assign to menu model
        
        //Variable name->column name = request->input name
        $data->Category_name = $request-> Category;
        //save the data
        $data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    //delete category page
    public function delete_Category($id)
    {
        $data = Category::find($id); //find the id
        
        //delete the relevant record
        $data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Category Deleted Successfully'); 
    }
    //-------------Category function end-----------------

}
