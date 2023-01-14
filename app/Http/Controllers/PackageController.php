<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

class PackageController extends Controller
{
    //-------------Package functions start-----------------
    //show add Package page
    public function show_Add_Packages()
    {
        return view('admin.Add_Packages');
    }

    //add Package 
    public function Add_Packages(Request $request)
    {
        $Package_Data = new Package; //menu model assign to $data
        
        //Variable name->column name = request->input name
        $Package_Data->Package_name = $request-> Package_Name;
        $Package_Data->Price = $request-> Price;
        $Package_Data->Discount_Price  = $request-> dis_Price;
        $Package_Data->Description = $request-> desc;

        //save the data
        $Package_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Package Added Successfully');
    }

    //show Package details page
    public function show_Package_details()
    {
        $Package_Data = Package::all(); //get the all inventory table records

        return view('admin.Package_details', compact('Package_Data'));
    }

    //show Package details in edit page
    public function edit_Package($id)
    {
       $Package_Data = Package::find($id); //find the id

       return view('admin.Edit_Package', compact('Package_Data'));
    }

    //update confirm Package details
    public function update_Package_confirm(Request $request,$id)
    {
        $Package_Data = Package::find($id); //find the id

        //Variable name->column name = parameter->input name
        $Package_Data->Package_name = $request-> Package_Name;
        $Package_Data->Price = $request-> Price;
        $Package_Data->Discount_Price  = $request-> dis_Price;
        $Package_Data->Description = $request-> desc;

        //save the data
        $Package_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Package Saved Successfully'); 
    }

    //delete Package
    public function delete_Package($id)
    {
        $Package_Data = Package::find($id); //find the id
        
        //delete the relevant record
        $Package_Data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Package Deleted Successfully'); 
    }
    //-------------Inventory functions end-----------------

}


