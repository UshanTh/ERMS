<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Menu;  
use App\Models\Cart;  
use App\Models\Orders;  

class OrderController extends Controller
{
    //add to cart page
    public function add_Order()
    {
        $user = Auth::user(); //logged user id
        $user_id = $user->id; 
        $Cart=cart::where('user_id', '=',$user_id)->get();

        foreach($Cart as $Cart)
        {
            $order = new Orders;

            $order->user_id  = $Cart->user_id;
            $order->username = $Cart->username;
            $order->email = $Cart->email;
            $order->tell_no = $Cart->tell_no ;
            $order->Menu_id = $Cart->Menu_id;
            $order->Menu_name  = $Cart->Menu_name;
            $order->Qty = $Cart->Qty;
            $order->Price = $Cart->Price;
            $order->Order_Status = 'Processing'; //save manually order status
            $order->Payment_Status = 'Not-Paid'; //save manually payment status

            $order->save();

            $cart_id=$Cart->id;
            
            $Cart=Cart::find($cart_id);

            $Cart->delete();
        }

        return redirect()->back()->with('message', 'We recevied your order.. Please be patient..');
    }

    //show order details in show order page
    public function view_Orders()
    {
       $order_Details = Orders::all();

       return view('admin.Order_details', compact('order_Details'));
       
    }

    //after confirmed the order change the order status 
    public function change_Status(Request $request,$id)
    {
        $Order_data = Orders::find($id); //find the id

        //Variable name->column name = parameter->input name
        $Order_data->Order_Status = 'Confirmed';

        //save the data
        $Order_data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Order Confirmed Successfully'); 
    }

    //after payment done change the payment status
    public function payment_Done(Request $request,$id)
    {
        $Order_data = Orders::find($id); //find the id

        //Variable name->column name = parameter->input name
        $Order_data->Payment_Status = 'Paid';

        //save the data
        $Order_data->save();
        //return to page with message
        return redirect()->back()->with('message', 'Payment Confirmed Successfully'); 
    }
}
