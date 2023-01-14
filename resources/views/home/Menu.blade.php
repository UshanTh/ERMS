<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Menu | Egodawatta Hill Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        
        @include('home.css')

        <style type="text/css">
            .menu_image{
                weight: 300px !important; 
                height: 300px !important;
            }

            .add_icon{
                margin: auto !important;
                padding-top: 25px;
            }

            form{
                /* position: relative; */
                width: 100% !important;
                margin-top: 10px !important;
                /* margin-right: auto !important;
                margin-left: auto !important;
                 */
            }

            .form-control{
                border-radius: 5px !important; 
            }

            .form-group{
                margin-right: auto !important;
                margin-left: auto !important;
                /* background-color: red; */
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
                                <h2>Our Menu</h2>
                                <span>Home / <a href="{{url('/view_Menu')}}">Menu</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Hungry ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all">All</span></li>
                                <li><span class="filter" data-filter=".ginger">Ginger</span></li>
                                <li><span class="filter" data-filter=".pizza">Pizza</span></li>
                                <li><span class="filter" data-filter=".pasta">Pasta</span></li>
                                <li><span class="filter" data-filter=".drink">Drink</span></li>
                                <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                        @foreach($data as $records)
                        <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Menu/{{$records->Image}}" alt="" class="menu_image" weight="300px !important;" height="300px !important;"/>
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Menu/{{$records->Image}}"><img src="home/images/open-icon.png" alt="" class="add_icon"/></a>
                                            <span style="padding-top: 15px;">{{$records->menu_Name}}</span>

                                            <form action="{{url('add_cart',$records->id)}}" method="post">
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
                                <div class="label-text">
                                    <h3><a href="{{url('Menu_details', $records->id)}}">{{$records->menu_Name}}</a></h3>
                                    
                                    <!-- if discount price is not null show discount price and cut the price -->
                                    @if($records->Discount_price!=null) 
                                        <span class="text-category">Discount Price Rs : {{$records->Discount_price}}</span>

                                        <span style="text-decoration: line-through;" class="text-category">Price Rs : {{$records->Price}}</span>

                                    @else
                                        <span class="text-category">Price Rs : {{$records->Price}}</span>
                                    @endif
                                    
                                </div>
                            </div>          
                        </div>
                        @endforeach

                        {!!$data->links('pagination::bootstrap-5')!!}
                       
                    </div>
                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>
                                	<li><a href="#">Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>

            @include('home.script')
            @include('home.footer')

    </body>
</html>