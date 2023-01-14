@include('home.header')

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>E R M S - Cart | Egodawatta Hill Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <base href="/public">
        @include('home.css')

        <style type = "text/css">
            .row hr{
                max-width: 98% !important;
                border: 0.7px solid #DDDDDD;
                margin: 10px 0px 0 12px !important;
            }
            h1{
                font-size: 20px !important;
            }

            table{
                margin: 5px auto 0 auto !important;
                max-width: 99% !important;
            }

            .img-size{
                height: 100px;
                weight: 1000px !important;
            }

            .btn{
                width: 100% !important;
            }

            .card{
                background-color: #FEFBF6;
                Padding: 10%;
                text-align: center;
                border: 1px solid #ECE8DD;
            }
        </style>

    </head>
    <body>

    <div class="container">
        <!-- add messgae -->
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> -->
                        {{session()->get('message')}}
                    </div>
                @endif
        <h1 class="pt-1">Cart Page</h1>
        <hr>
        <div class="col-sm-8">
            <div class="row">  
                <table class="table text-center">
                    <thead class="table-header">
                    <tr>
                        <th scope="col">Menu Id </th>
                        <th scope="col">Menu Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totPrice=0; ?>
                        @foreach($Cart as $Cart_data)
                        <tr>
                            <td>{{$Cart_data->Menu_id }}</td>
                            <td>{{$Cart_data->Menu_name }}</td>
                            <td>{{$Cart_data->Qty}}</td>
                            <td>Rs {{$Cart_data->Price}}</td>
                            <td>
                               <img class="img-size" src="/Menu/{{$Cart_data->Image}}" alt="">
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to remove this meal?')" href="{{url('remove_Cart', $Cart_data->id)}}" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                        <?php $totPrice= $totPrice + $Cart_data->Price ?>
                        @endforeach
                            
                </tbody>
            </table>
        </div>

        
    </div>
    <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Order Summary</h5>
                    <hr>
                    
                    
                    <label for="">Total  : </label><span> Rs {{$totPrice}}</span>
                    <hr>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <a href="{{url('add_Order')}}" class="btn btn-primary">Add Order</a>
                </div>
            </div>
        </div>
    </div>

    


        @include('home.footer')
        
        @include('home.script')
    </body>
</html>