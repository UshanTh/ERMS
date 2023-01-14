<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SupplierInventory;

class SupplierInventoryController extends Controller
{
    //show inventory details page
    public function show_SupInventory_details()
    {
        $SupInevntory_details = SupplierInventory::all(); //get the all the inventory table records

        return view('admin.Inventory_details', compact('SupInevntory_details'));
    }

}
