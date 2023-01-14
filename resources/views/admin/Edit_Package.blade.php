<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Edit Package | Egodawatta Hill Side</title>

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
                    <h1 class="pt-4">Edit Package Details</h1>
                    <hr>
                    <div class="col-md-6">
                        <form action="{{url('/update_Package_confirm', $Package_Data->id)}}" method="POST"> 
                            @csrf
                            <div class="form-group my-3">
                                <label for="Package_Name" class="py-2">Packages Name</label>
                                <input type="text" name="Package_Name" class="input-class form-control" id="" value="{{$Package_Data->Package_name}}">
                            </div>
                            
                            <div class="form-group my-3">
                                <label for="Price" class="py-2">Package Price</label>
                                <input type="number" name="Price" class="input-class form-control" id="" value="{{$Package_Data->Price}}">
                            </div>

                            <div class="form-group my-3">
                                <label for="dis_Price" class="py-2">Discount Price</label>
                                <input type="number" name="dis_Price" class="input-class form-control" id="" value="{{$Package_Data->Discount_Price}}">
                            </div>

                    </div>

                    <div class="col-md-6">
                            <div class="form-group my-3">
                                <label for="desc" class="py-2">Description</label>
                                <textarea name="desc" id="" cols="30" rows="10" class="input-class form-control" value="{{$Package_Data->Description}}"></textarea>
                            </div>

                        <input type="submit" value="Update Inventory" name="submit" class="btn btn-primary btn_submit mt-2 py-4">

                        </form>
                    </div>
                    
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
