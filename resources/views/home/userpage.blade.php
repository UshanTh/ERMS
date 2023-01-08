@include('home.header')



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>E R M S | Egodawatta Hill Side</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        @include('home.css')
    </head>
    <body>

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1 style="font-weight: 800">Enjoy Our Delicious Meals</h1>
                            <p style="color: black; font-weight: 500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam accusantium, sequi at corrupti cum architecto 
                            <br><br>ferendis in dolores, odio, expedita dolor rem.</p>
                            <a href="single-post.html">Shop Now</a>
                        </div>
                      <img src="home/images/bg.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Ice-cream Menus</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta officia qui libero totam quo, facere commodi  
                            <br><br>placeat magni similique minus dicta est quod.</p>
                            <a href="single-post.html">More Details</a>
                        </div>
                      <img src="home/images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Healthy Drinks</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta officia qui libero totam quo, facere commodi
                            <br><br>placeat magni similique minus dicta est quod.</p>
                            <a href="single-post.html">Get Ready</a>
                        </div>
                      <img src="home/images/slide3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>


            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <!-- <h2>Free Website Templates</h2> -->
                                <img src="images/under-heading.png" alt="" >
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                <i class="fas fa-leaf text-primary mb-4"></i>
                                </div>
                                <h4>Surrounding</h4>
                                <p>Whether you're planning a meeting, full day function, wedding or any social event, you want to make it memorable. One with character and sophistication ,one that will provide your guests with an environment that enhances the experience and inspire everyone..</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                </div>
                                <h4>Master Chefs</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea numquam error, ab fugit id expedita cupiditate voluptatum odio quidem reprehenderit corrupti consectetur facilis temporibus, at nesciunt ut? Impedit, hic voluptates?.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                </div>
                                <h4>Quality Food</h4>
                                <p>The Egodawatta Hillside Hotel in Mirigama area is an accommodation aiming your all over relaxation. The charming and spacious building with a lovely garden has been refurbished recently and the management provides you with delicious and healthy  meals.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                </div>
                                <h4>24/7 Service</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, eum dolores alias cum iusto temporibus nulla eveniet fugit officia vel, itaque libero aliquam eius quae amet mollitia laboriosam? Animi, molestias!.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="testimonails" style="background-color: #FFF5E4;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>What Our Clients Say</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
                                <li>
                                    <div class="testimonails-content">
                                        <p>This is a very good hotel in Gampaha area and it values for the money been paid. The staff & rooms are well maintained.</p>
                                        <h6><i>Jeni Ruth</i></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>We stayed at Egodawatta Hillside for our last two days in Sri Lanka. We had a fantastic environment with a decent ensuite..</p>
                                        <h6><i>Tommy Haryson</i></h6>
                                    </div> 
                                </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('home.footer')
        
            @include('home.script')
        

    </body>
</html>