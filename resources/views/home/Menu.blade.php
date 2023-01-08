<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

-->
    <head>
        <meta charset="utf-8">
        <title>Menu | Egodawatta Hill Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        @include('home.css')
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
                                    <img src="Menu/{{$records->Image}}" alt="" weight="300px" height="300px"/>
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="home/images/product1_big.jpg"><img src="home/images/open-icon.png" alt="" /></a>
                                            <span style="padding-top: 15px;">{{$records->menu_Name}}</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">{{$records->menu_Name}}</a></h3>
                                    
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