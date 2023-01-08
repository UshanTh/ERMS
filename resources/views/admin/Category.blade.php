<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Category | Egodawatta Hill Side</title>

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

            .input-class{
                border-radius: 5px !important;          
            }

            .btn_submit{
                margin-left: 10px !important;
                background-color: #696cff !important;
            }
            
            table{
                margin-left: auto !important;
                margin-right: auto !important;
                max-width: 99% !important;
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
                    <h1 class="pt-4">Add Category</h1>
                    <hr>
                    <form action="{{url('/add_Category')}}" method="POST" class=py-4>
                        @csrf
                        <div class="form-group text-center">
                            <input type="text" name="Category"  class="input-class" id="" placeholder="Enter Category Name here...">
                            <input type="submit" value="Add Category" name="submit" class="btn btn-primary btn_submit">
                        </div>
                    </form>
                        
                    <table class="table text-center">
                        <thead class="table-header">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                                <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->Category_name}}</td>
                                <td><a onclick="return confirm('Are you sure you want to delete this record?')" href="{{url('delete_Category', $data->id)}}" class="btn btn-danger">Delete</a></td>
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
        <!-- @include('admin.script') -->
    <!-- Js tags end -->
  </body>
</html>
