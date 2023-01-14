<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Order Details | Egodawatta Hill Side</title>

        <meta name="description" content="" />

        <style type = "text/css">
            .row hr{
                max-width: 98% !important;
                border: 0.7px solid #DDDDDD;
                margin: 10px 4px 0 12px !important;
            }
            h1{
                font-size: 20px !important;
            }

            table{
                margin: 35px auto 0 auto !important;
                max-width: 99% !important;
            }

            .img-size{
                height: 100px;
                weight: 1000px !important;
            }
        </style>
        
        <!-- css tags start-->
            @include('admin.css')
        <!-- css tags end--> 
    </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <!-- side menu -->
            @include('admin.sidenav')
        <!-- / side menu -->

        <div class="layout-page">
          <!-- Navbar -->
                @include('admin.navbar')
          <!-- / Navbar -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- add messgae -->
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> -->
                        {{session()->get('message')}}
                    </div>
                @endif

                @if(session()->has('danger_message'))
                    <div class="alert alert-danger">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> -->
                        {{session()->get('message')}}
                    </div>
                @endif

                <div class="row">
                    <h1 class="pt-4">Order Details</h1>
                    <hr>
                        
                    <table class="table text-center">
                        <thead class="table-header">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Tell No</th>
                            <th scope="col">Menu Id</th>
                            <th scope="col">Menu Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Order date & time</th>
                            
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_Details as $order_Details)
                                <tr>
                                <td>{{$order_Details->id}}</td>
                                <td>{{$order_Details->user_id}}</td>
                                <td>{{$order_Details->username }}</td>
                                <td>{{$order_Details->tell_no}}</td>
                                <td>{{$order_Details->Menu_id}}</td>
                                <td>{{$order_Details->Menu_name}}</td>
                                <td>{{$order_Details->Qty}}</td>
                                <td>{{$order_Details->Price}}</td>
                                <!-- <td>{{$order_Details->Order_Status}}</td> -->

                                @if($order_Details->Order_Status=='Processing')
                                    <td style="color: red;">{{$order_Details->Order_Status}}</td>
                                @else
                                    <td style="color: blue;">{{$order_Details->Order_Status}}</td>
                                @endif

                                
                                @if($order_Details->Payment_Status=='Not-Paid')
                                    <!-- <td style="color: red;">{{$order_Details->Order_Status}}</td> -->
                                    <td style="color: red;">{{$order_Details->Payment_Status}}</td>
                                @else
                                    <!-- <td style="color: blue;">{{$order_Details->Order_Status}}</td> -->
                                    <td style="color: Green;">{{$order_Details->Payment_Status}}</td>
                                @endif

                                <td>{{$order_Details->created_at}}</td>
                                
                                
                                <td>
                                    <a href="{{url('change_Status', $order_Details->id)}}" class="btn btn-primary w-100">Confirmed</a>
                                    

                                    @if($order_Details->Order_Status=='Processing')
                                        <a onclick="msgFunction()" href="#" class="btn btn-success mt-2 w-100">Paid</a>                
                                    @else
                                        <a href="{{url('payment_Done', $order_Details->id)}}" class="btn btn-success mt-2 w-100">Paid</a>                
                                    @endif
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
                @include('admin.footer')
            <!-- / Footer -->
        </div>
        <!-- / Layout page -->
    </div>
    <script>
function msgFunction() {
  alert("Please confirmed the order...!");
}
</script>

    <!-- Js tags start -->
        @include('admin.script')
    <!-- Js tags end -->
  </body>
</html>
