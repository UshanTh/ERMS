<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Inventory Details | Egodawatta Hill Side</title>

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

            .btn_submit{
                background-color: #696cff !important;
            }

            .btn-success{
                background-color: #71dd37 !important;
                float: end !important;
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
                    <h1 class="pt-4">Inventory Details</h1>
                    
                    <div class="">
                        
                    </div>
                    
                    <hr>
                    <div class="col-md-6">
                        
                        <form action="{{url('/Add_Staff')}}" method="POST"> 
                            @csrf

                        
                            <div class="form-group my-3">
                                <label for="Sup_id" class="py-2">Supplier ID</label>
                                <input type="number" name="Sup_id" class="input-class form-control" id="" placeholder="Enter Supplier Id.." required>
                            </div>
                        
                            <div class="form-group my-3">
                                <label for="In_id" class="py-2">Inventory ID</label>
                                <input type="number" name="In_id" class="input-class form-control" id="" placeholder="Enter Inventory Id.." required>
                            </div>

                            <div class="form-group my-3">
                                <label for="Qty" class="py-2">Quantity</label>
                                <input type="number" name="Qty" class="input-class form-control" id="" placeholder="Enter Quantity..">
                            </div>

                            <div class="form-group my-3">
                                <label for="date" class="py-2">Date</label>
                                <input type="date" name="date" class="input-class form-control" id="">
                            </div>

                            <input type="submit" value="Add Inventory" name="submit" class="btn btn-primary btn_submit mt-4 py-3 w-100">
                    </div>
                    
                    <div class="col-md-6">
                    <input type="submit" value="Get Report" name="submit" class="btn btn-success mt-4 py-3 w-25 float-end">
                    <table class="table text-center">
                        <thead class="table-header">
                            <tr>
                            <th scope="col">Supplier Id</th>    
                            <th scope="col">Inventory Id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>11/01/2023</td>
                                </tr>

                        </tbody>
                    </table>

                    </div>
                    <table class="table text-center">
                        <thead class="table-header">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Iten Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Add Date</th>
                            <th scope="col">Update Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Inventory_Data as $Inventory_Data)
                                <tr>
                                <td>{{$Inventory_Data->id}}</td>
                                <td>{{$Inventory_Data->Item_Name}}</td>
                                <td>{{$Inventory_Data->Category}}</td>
                                <td>{{$Inventory_Data->Qty}}</td>

                                @if($Inventory_Data->Status=='In-stock')
                                    <td style="color: green;">{{$Inventory_Data->Status}}</td>
                                @else
                                    <td style="color: red;">{{$Inventory_Data->Status}}</td>
                                @endif

                                <td>{{$Inventory_Data->created_at}}</td>
                                <td>{{$Inventory_Data->updated_at}}</td>
                                
                                <td>
                                    <a href="{{url('edit_Inventory', $Inventory_Data->id)}}" class="btn btn-success">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete this record?')" href="{{url('delete_Inventory', $Inventory_Data->id)}}" class="btn btn-danger">Delete</a>
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

    <!-- Js tags start -->
        @include('admin.script')
    <!-- Js tags end -->
  </body>
</html>
