<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;  

class SupplierController extends Controller
{
    //-------------supplier functions start-----------------
    //show_suppliers page
    public function show_suppliers()
    {
        //$data = Supplier::all(); //get the all menu table records

        return view('admin.Add_Suppliers');
    }

    //add supplier 
    public function save_Supplier(Request $request)
    {
        $supplier_Data = new Supplier; //menu model assign to $data
        
        //Variable name->column name = request->input name
        $supplier_Data->Sup_name = $request-> Supplier_Name;
        $supplier_Data->Category = $request-> Category;
        $supplier_Data->Supplied_Item  = $request-> Supplied_Item;
        $supplier_Data->Qty = $request-> Quantity;
        $supplier_Data->S_Email = $request-> Email;
        $supplier_Data->S_Address = $request-> Address;
        $supplier_Data->Tell_No = $request-> Tell_No;

        //save the data
        $supplier_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Supplier Added Successfully');
    }

    //show Supplier details page
    public function show_supplier_details()
    {
        $All_record = Supplier::all(); //get the all menu table records

        return view('admin.Supplier_details', compact('All_record'));
    }

    //show Supplier details in edit page
    public function edit_Supplier($id)
    {
       $data = Supplier::find($id); //find the id

       return view('admin.Edit_Supplier', compact('data'));
    }

    //update confirm supplier details
    public function update_Supplier_confirm(Request $request,$id)
    {
        $supplier_Data = Supplier::find($id); //find the id

        //Variable name->column name = parameter->input name
        $supplier_Data->Sup_name = $request-> Supplier_Name;
        $supplier_Data->Category = $request-> Category;
        $supplier_Data->Supplied_Item  = $request-> Supplied_Item;
        $supplier_Data->Qty = $request-> Quantity;
        $supplier_Data->S_Email = $request-> Email;
        $supplier_Data->S_Address = $request-> Address;
        $supplier_Data->Tell_No = $request-> Tell_No;

        //save the data
        $supplier_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Supplier Saved Successfully'); 
    }

    //delete Supplier
    public function delete_Supplier($id)
    {
        $data = Supplier::find($id); //find the id
        
        //delete the relevant record
        $data->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Supplier Deleted Successfully'); 
    }
    //-------------Supplier functions end-----------------
}
