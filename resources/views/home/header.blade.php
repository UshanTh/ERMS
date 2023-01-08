<header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="#">Home</a>
                                    <a href="#">My account</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
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
                                    <a href="#"><img src="home/images/lg.png" title="Grill Template" alt="E R M S Logo" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a a href="{{url('/user_view_Menu')}}">Menu</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>  
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