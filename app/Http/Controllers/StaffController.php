<?php

namespace App\Http\Controllers;

use App\Models\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
     //-------------Staff functions start-----------------
    //show add Staff page
    public function add_staff_page()
    {
        return view('admin.Add_Staff');
    }

    //add satff member 
    public function Add_Staff(Request $request)
    {
        $staff_Data = new Staff; //menu model assign to $data
        
        //Variable name->column name = request->input name
        $staff_Data->name = $request-> Emp_Name;
        $staff_Data->email = $request-> email;
        $staff_Data->password  = $request-> pwd;
        $staff_Data->tell_no = $request-> tell_no;
        $staff_Data->Address = $request-> address;
        $staff_Data->Category = $request-> Category;
        $staff_Data->Status = $request-> Status;

        //save the data
        $staff_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Employee Added Successfully');
    }

    //show staff details page
    public function show_Staff_details()
    {
        $staff_details = Staff::all(); //get the all inventory table records

        return view('admin.Staff_details', compact('staff_details'));
    }

    //show Staff details in edit page
    public function edit_Staff($id)
    {
       $staff = Staff::find($id); //find the id

       return view('admin.Edit_Staff', compact('staff'));
    }

    //update confirm Inventory details
    public function update_staff_confirm(Request $request,$id)
    {
        $staff_Data = Staff::find($id); //find the id

        //Variable name->column name = parameter->input name
        $staff_Data->name = $request-> Emp_Name;
        $staff_Data->email = $request-> email;
        $staff_Data->tell_no = $request-> tell_no;
        $staff_Data->Address = $request-> address;
        $staff_Data->Category = $request-> Category;
        $staff_Data->Status = $request-> Status;

        //save the data
        $staff_Data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Employee Updated Successfully'); 
    }

    //delete staff
    public function delete_Staff($id)
    {
        $staff = Staff::find($id); //find the id
        
        //delete the relevant record
        $staff->delete();

        //return to page with message
        return redirect()->back()->with('message', 'Employee Deleted Successfully'); 
    }
    //-------------Employee functions end-----------------

}
