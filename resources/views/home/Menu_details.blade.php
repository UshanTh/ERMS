<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Menu Details | Egodawatta Hill Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        
        <base href="/public">
        @include('home.css')

        <style type="text/css">
            .decorate{
                margin-right: auto;
                margin-left: auto;
            }

            .btn{
                background-color: #428bca !important;
            }

            .btn:hover{
                background-color: #39B5E0 !important;
            }

            .form-control{
                border-radius: 5px !important;
            }
        </style>
    </head>
    <body>
            @include('home.header')

            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Menu Details</h2>
                                <span>Home / <a href="single-post.html">Menu details</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @csrf
            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Home / {{$Menu_data->menu_Name}} </h2>
                                <img src="home/images/under-heading.png" alt="" class="decorate"/>
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">  
                                            <div class="image">
                                                <div class="image-post">
                                                    <img height="300px" width="300px" src="Menu/{{$Menu_data->Image}}" alt="" style="margin-right: auto;margin-left: auto;">
                                                </div>
                                            </div>
                                            
                                            
                                        </div>

                                        <div class="col-md-6">
                                            <div class="product-content">
                                                <div class="product-title">
                                                    <h3 style="font-size: 2rem; color: #f78e21;">{{$Menu_data->menu_Name}}</h3>
                                                    <!-- <span class="subtitle">4 comments</span> -->
                                                </div>
                                                
                                            </div>
                                                <!-- if discount price is not null show discount price and cut the price -->
                                                @if($Menu_data->Discount_price!=null) 
                                                    <span class="text-category">Discount Price Rs : {{$Menu_data->Discount_price}}</span>
                                                    <br>
                                                    <span style="text-decoration: line-through;" class="text-category">Price Rs : {{$Menu_data->Price}}</span>

                                                @else
                                                    <span class="text-category">Price Rs : {{$Menu_data->Price}}</span>
                                                @endif  
                                                
                                                <form action="{{url('add_cart',$Menu_data->id)}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input type="number" name="Qty" id="" class="form-control" value="1" min="1">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="submit" value="Add" class="form-control btn btn-primary">
                                                    </div>
                                                    </div>
                                                </form>
                                        </div>   
                                    </div>
                                </div>
                                <Label>Description : </Label><span>Single blog post page is here for you. You can use this grill <a href="#">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href="#">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>
                                                Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href="#">commodo</a> sapien.</span>
                            </div>
                            <div class="divide-line" style="display: none;">
                                <img src="home/images/div-line.png" alt="" />
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
            @include('home.script')
            @include('home.footer')
    </body>
</html>