<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Menu | Egodawatta Hill Side</title>

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
                /* text-align: left; */
                width: 80% !important;
                margin-right: auto;
                margin-left: auto;
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
                    <h1 class="pt-4">Edit Menu Details</h1>
                    <hr>
                    <div class="col-md-6">
                    <form action="{{url('/update_Menu_confirm', $data->id)}}" method="POST" class=py-4 enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group my-3">
                            <label for="Menu_Name" class="py-2">Menu Name</label>
                            <input type="text" name="Menu_Name" class="input-class form-control" id="" value="{{$data->menu_Name}}" required>
                        </div>
                        
                        <div class="form-group my-3">
                            <label for="Category" class="py-2">Category Id</label>
                            <select class="form-control" name="Category" required>
                                <option value="{{$data->Category_id}}" selected="">{{$data->Category_id}}</option>
                                @foreach($category_Record as $category_Record)
                                    <option value="{{$category_Record->id}}">{{$category_Record->id}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group my-3">
                            <label for="Price" class="py-2">Price</label>
                            <input type="text" name="Price" class="input-class form-control" id="" value="{{$data->Price}}" required>
                        </div>

                        <div class="form-group my-3">
                            <label for="discount_price" class="py-2">Discount Price</label>
                            <span>(optional)</span>
                            <input type="text" name="discount_price" class="input-class form-control" id="" value="{{$data->Discount_price}}">
                        </div>

                        <div class="form-group my-3">
                            <label for="Menu_Name" class="py-2">Image</label>
                            <!-- <img href="/product/{{$data->Image}}" src="/Menu/{{$data->Image}}" alt=""> -->
                            <input type="file" name="image" class="input-class form-control" src="/Menu/{{$data->Image}}" id="">
                        </div>

                        <div class="form-group my-3">
                            <label for="desc" class="py-2">Description</label>
                            <span>(optional)</span>
                            <input type="text" name="desc" class="input-class form-control" id="" value="{{$data->Menu_Description}}">
                        </div>
                        <input type="submit" value="Update Menu" name="submit" class="btn btn-primary btn_submit py-4">

                        <!-- <input type="submit" value="Add Menu" name="submit" class="btn btn-primary btn_submit"> -->
                    </form>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group my-3 text-center">
                            <label for="Menu_Name" class="py-4">Current Image</label>
                            <img height="300px" width="300px" src="/Menu/{{$data->Image}}" alt="" style="margin-right: auto;margin-left: auto;">
                            <!-- <input type="file" name="image" class="input-class form-control" id="" required> -->
                        </div>
                        <div class="form-group my-3 text-center">
                        </div>
                        
                    </div>
                    <!-- enctype cuz adding a file -->
                    
                </div>
            </div>

            <!-- Footer -->
                @include('admin.footer')
            <!-- / Footer -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Js tags start -->
        <!-- @include('admin.script') -->
    <!-- Js tags end -->
  </body>
</html>
