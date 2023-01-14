<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Edit Employee | Egodawatta Hill Side</title>

        <meta name="description" content="" />

        <base href="/public">

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
                    <h1 class="pt-4">Edit Employee Details</h1>
                    <hr>
                    <div class="col-md-6">
                        <form action="{{url('/update_staff_confirm', $staff->id)}}" method="POST"> 
                            @csrf
                            <div class="form-group my-3">
                                <label for="Emp_Name" class="py-2">Employee Name</label>
                                <input type="text" name="Emp_Name" class="input-class form-control" id="" value="{{$staff->name}}">
                            </div>
                        
                            <div class="form-group my-3">
                                <label for="email" class="py-2">Employee Email</label>
                                <input type="text" name="email" class="input-class form-control" id="" value="{{$staff->email}}">
                            </div>

                            <div class="form-group my-3">
                                <label for="tell_no" class="py-2">Tell No</label>
                                <input type="number" name="tell_no" class="input-class form-control" id="" value="{{$staff->tell_no}}">
                            </div>
                    </div>

                        <div class="col-md-6">

                            <div class="form-group my-3">
                                <label for="address" class="py-2">Address</label>
                                <input type="text" name="address" class="input-class form-control" id="" value="{{$staff->Address}}">
                            </div>

                            <div class="form-group my-3">
                                <label for="Category" class="py-2">Category</label>
                                <select class="form-control" name="Category">
                                    <option selected>{{$staff->Category}}</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Cheff">Cheff</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group my-3">
                                <label for="Status" class="py-2">Status</label>
                                <select class="form-control" name="Status">
                                    <option selected>{{$staff->Status}}</option>
                                    <option value="Active">Active</option>
                                    <option value="Leave">Leave</option>
                                </select>
                            </div>


                            <input type="submit" value="Update Employee" name="submit" class="btn btn-primary btn_submit mt-4 py-4">
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
