<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Add Suppliers | Egodawatta Hill Side</title>

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

            form{
                text-align: left;
                width: 90% !important;
            }

            .input-class{
                border-radius: 5px !important;          
            }

            .btn_submit{
                /* margin-left: 10px !important; */
                background-color: #696cff !important;
                width: 100%;
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

                <div class="row">
                    <h1 class="pt-4">Add Suppliers</h1>
                    <hr>

                    <div class="col-md-6">
                        <form action="{{url('/save_Supplier')}}" method="POST"> 
                            @csrf

                        
                            <div class="form-group my-3">
                                <label for="Supplier_Name" class="py-2">Supplier Name</label>
                                <input type="text" name="Supplier_Name" class="input-class form-control" id="" placeholder="Enter Supplier Name.." required>
                            </div>
                        
                            <div class="form-group my-3">
                                <label for="Category" class="py-2">Category Id</label>
                                <select class="form-control" name="Category" required>
                                
                                    <option>Cooking Raw Meterial</option>
                                    <option>Soft Drinks</option>
                                    <option>Other Items</option>
                                
                                </select>
                            </div>

                            <div class="form-group my-3">
                                <label for="Supplied_Item" class="py-2">Supplied Item</label>
                                <input type="text" name="Supplied_Item" class="input-class form-control" id="" placeholder="Enter Item name.." required>
                            </div>

                            <div class="form-group my-3">
                                <label for="Quantity" class="py-2">Quantity</label>
                                <span>(optional)</span>
                                <input type="text" name="Quantity" class="input-class form-control" id="" placeholder="Enter Quantity..">
                            </div>
                    </div>

                        <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="Email" class="py-2">Email Address</label>
                                <input type="email" name="Email" class="input-class form-control" placeholder="Enter Email address.." required>
                            </div>

                            <div class="form-group my-3">
                                <label for="Address" class="py-2">Address</label>
                                <input type="text" name="Address" class="input-class form-control" id="" placeholder="Enter Address...">
                            </div>

                            <div class="form-group my-3">
                                <label for="Tell_No" class="py-2">Tell No</label>
                                <input type="Numbers" name="Tell_No" class="input-class form-control" id="" placeholder="Enter Tell No...">
                            </div>

                            <input type="submit" value="Add Supplier" name="submit" class="btn btn-primary btn_submit mt-2 py-4">
                        </div>
                        

                        
                    </form>
                </div>
            </div>

            <!-- Footer -->
                @include('admin.footer')
            <!-- / Footer -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Js tags start -->
        @include('admin.script')
    <!-- Js tags end -->
  </body>
</html>
