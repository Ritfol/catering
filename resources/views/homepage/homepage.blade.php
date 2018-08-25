@extends('layouts.homepage')

@section('content')

    <div class="overflow-content cat_boxed_wrapper">
        <!--Banner Section Start-->
        <section class="cat_top_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 padding-right">
                        <div class="cat_heading_wrapper">
                            <div class="cat_logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('images/logo.PNG') }}" style="width: 180px; height: 150px;">
                                </a>
                            </div>
                            <div class="cat_top_heading">
                                <h2>Hawa's</h2>
                                <h1>Delight</h1>
                            </div>
                            <div class="cat_heading_img wow slidefromtop">
                                <img src="{{ asset('images/hand.png') }}" alt="" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 padding-left">
                        <div class="cat_menu_wrapper">
                            <nav>
                                <div class="menu_toggle"><i class="flaticon-food-3"></i>
                                    <span class="menu_name">menu</span>
                                </div>
                                <div class="collapse navbar-collapse cat_menu">
                                    <div class="close_btn"><i class="flaticon-tool-1"></i></div>
                                    <div class="menu_overlay"></div>
                                    <ul class="nav navbar-nav pull-right">

                                        <li><a href="{{ route('register') }}">Sign Up</a>
                                        </li>
                                        <li><a href="{{ route('login') }}">Log In</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="cat_menus_img wow slideleft">
                                <img src="{{ asset('images/chef.png') }}" alt="" class="img-responsive" />
                            </div>
                            <div class="col-lg-7 col-md-10 col-sm-10 padding-right padding-left pull-right">
                                <div class="cat_menus_content">
                                    <h4>Book our service now!</h4>
                                    <h4>(800) 123 1234</h4>
                                    <h3>
                                        Special menu for
                                    </h3>
                                    <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque et magnis dis parturient montes asceturridiculus mus. Nulla dui. Fusce feugiat</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---- food for tomorrow --->
        <section class="cat_about_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cat_section_headings wow zoom">

                            <h4>Tomorrow's meals</h4>
                            <div class="cat_border"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="cat_about_content wow frombottom">
                        <div class="col-lg-6 col-md-6">
                            <div class="cat_dish_img wow slideleft">
                                <img src="{{ asset('images/about/1.jpg') }}" alt="" class="img-responsive" />
                                <div class="cat_dish_img_caption"></div>
                                <div class="cat_dish_name">
                                    <p class="cat_dish_title"><a href="#">Breakfast</a>
                                    </p>
                                    <div class="cat_dish_category">
                                        <ul>
                                            <li><a href="#">Golden spring rolls</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="cat_dish_img wow slideleft">
                                <img src="{{ asset('images/about/2.jpg') }}" alt="" class="img-responsive" />
                                <div class="cat_dish_img_caption"></div>
                                <div class="cat_dish_name">
                                    <p class="cat_dish_title"><a href="#">Lunch</a>
                                    </p>
                                    <div class="cat_dish_category">
                                        <ul>
                                            <li><a href="#">Golden spring rolls</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="cat_about_content wow frombottom">
                        <div class="col-lg-6 col-md-6">
                            <div class="cat_dish_img wow slideleft">
                                <img src="{{ asset('images/about/1.jpg') }}" alt="" class="img-responsive" />
                                <div class="cat_dish_img_caption"></div>
                                <div class="cat_dish_name">
                                    <p class="cat_dish_title"><a href="#">Dinner</a>
                                    </p>
                                    <div class="cat_dish_category">
                                        <ul>
                                            <li><a href="#">Golden spring rolls</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="cat_dish_img wow slideleft">
                                <img src="{{ asset('images/about/2.jpg') }}" alt="" class="img-responsive" />
                                <div class="cat_dish_img_caption"></div>
                                <div class="cat_dish_name">
                                    <p class="cat_dish_title"><a href="#">Drink (Optional for lunch and dinner)</a>
                                    </p>
                                    <div class="cat_dish_category">
                                        <ul>
                                            <li><a href="#">Golden spring rolls</a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!----//------------------------------->


        <!--Services Section Start-->
        <section class="cat_service_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cat_service_box wow slideleft m-b55">
                            <div class="cat_service_img">
                                <span class="cat_service_icon"><i class="flaticon-food-4"></i></span>
                            </div>
                            <h5>Good Rest</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="cat_service_box wow slideleft" data-wow-duration="2s">
                            <div class="cat_service_img">
                                <span class="cat_service_icon"><i class="flaticon-food-3"></i></span>
                                <h5>best cusin</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="cat_service_outer wow zoom">
                            <div class="cat_service_chart">
                                <div class="cat_service_data">
                                    <div class="cat_section_headings">
                                        <span class="cat_subheading">Best One</span>
                                        <h4>Our Services</h4>
                                        <div class="cat_border"></div>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="cat_service_box box-left m-b55 wow slideright">
                            <div class="cat_service_img">
                                <span class="cat_service_icon"><i class="flaticon-arrows"> </i></span>
                                <h5>24/7</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="cat_service_box box-left wow slideright" data-wow-duration="2s">
                            <div class="cat_service_img">
                                <span class="cat_service_icon"><i class="flaticon-kitchen"> </i></span>
                                <h5>Special Event Catring</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection