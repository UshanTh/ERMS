<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;
use App\Models\Inventory;  

class InventoryController extends Controller
{
     //-------------Inventory functions start-----------------
    //show add Inventory page
    public function show_Add_Inventory()
    {
        return view('admin.Add_Inventory');
    }

    //add Inventory 
    public function Add_Inventory(Request $request)
    {
        $Inventory_Data = new Inventory; //menu model assign to $data
        
        //Variable name->column name = request->input name
        $Inventory_Data->Item_Name = $request-> item_Name;
        $Inventory_Data->Category = $request-> Category_Name;
        $Inventory_Data->Qty  = $request-> Quantity;
        $Inventory_Data->Status = $request-> Status;

        //save the data
        $Inventory_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Inventory Added Successfully');
    }

    //show Inventory details page
    public function show_Inventory_details()
    {
        $Inventory_Data = Inventory::all(); //get the all inventory table records

        return view('admin.Inventory_details', compact('Inventory_Data'));
    }

    //show Inventory details in edit page
    public function edit_Inventory($id)
    {
       $Inventory_Data = Inventory::find($id); //find the id

       return view('admin.Edit_Inventory', compact('Inventory_Data'));
    }

    //update confirm Inventory details
    public function update_Inventory_confirm(Request $request,$id)
    {
        $Inventory_Data = Inventory::find($id); //find the id

        //Variable name->column name = parameter->input name
        $Inventory_Data->Item_Name = $request-> Item_Name;
        $Inventory_Data->Category = $request-> Category;
        $Inventory_Data->Qty  = $request-> Quantity;
        $Inventory_Data->Status = $request-> Status;

        //save the data
        $Inventory_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Inventory Saved Successfully'); 
    }

    //delete Inventory
    public function delete_Inventory($id)
    {
        $Inventory_Data = Inventory::find($id); //find the id
        
        //delete the relevant record
        $Inventory_Data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Inventory Deleted Successfully'); 
    }
    //-------------Inventory functions end-----------------
}
