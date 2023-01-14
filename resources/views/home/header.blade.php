<header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="{{url('/')}}">Home</a>
                                    <a href="#">My account</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                <a href="{{url('show_Cart')}}"><i class="fa fa-shopping-cart"></i></a>
                                    (<a href="{{url('show_Cart')}}">5 items</a>) in your cart (<a href="#">$45.80</a>)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="home/images/lg.png" alt="E R M S Logo" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a a href="{{url('/view_Menu')}}">Menu</a></li>
                                        <li><a href="#l">Contact</a></li>  
                                        <li><a href="{{url('/')}}">Hall Bookings</a></li>  
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="main-menu">
                                    <ul>
                                    @if (Route::has('login'))
                                        @auth
                                            <li><x-app-layout>
    
                                            </x-app-layout></li>  

                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>  
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        @endauth
                                    @endif
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </header>