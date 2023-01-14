<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>E R M S - Employee Details | Egodawatta Hill Side</title>

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

                <div class="row">
                    <h1 class="pt-4">Staff Details</h1>
                    <hr>
                        
                    <table class="table text-center">
                        <thead class="table-header">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tell No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff_details as $staff_details)
                                <tr>
                                <td>{{$staff_details->id}}</td>
                                <td>{{$staff_details->name}}</td>
                                <td>{{$staff_details->email}}</td>
                                <td>{{$staff_details->tell_no}}</td>
                                <td>{{$staff_details->Address}}</td>
                                <td>{{$staff_details->Category}}</td>

                                @if($staff_details->Status=='Active')
                                    <td style="color: green;">{{$staff_details->Status}}</td>
                                @else
                                    <td style="color: red;">{{$staff_details->Status}}</td>
                                @endif
                                
                                <td>
                                    <a href="{{url('edit_Staff', $staff_details->id)}}" class="btn btn-success">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete this record?')" href="{{url('delete_Staff', $staff_details->id)}}" class="btn btn-danger">Delete</a>
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
