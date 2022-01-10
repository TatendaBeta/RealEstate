<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css'
        href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--
Accord Template
http://www.templatemo.com/tm-478-accord
-->
    <title>Real Estate</title>
</head>

<body>
    <div class="main-body">
        <div class="container">
            <div class="row">
                <div class="main-page">

                    <aside class="main-navigation">
                        <div class="main-menu">

                            <div class="menu-container">
                                <div class="block-keep-ratio block-keep-ratio-2-1 block-width-full home">
                                    <a href="index.html" class="block-keep-ratio__content  main-menu-link">
                                        <span class="main-menu-link-text">
                                            HOME
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="menu-container">
                                <div
                                    class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">
                                    <a href="about.html"
                                        class="main-menu-link about block-keep-ratio__content flexbox-center">
                                        <i class="fa fa-user fa-4x main-menu-link-icon"></i>
                                        ABOUT
                                    </a>
                                </div>

                                <div
                                    class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                    <a href="contact.html"
                                        class="main-menu-link contact block-keep-ratio__content flexbox-center">
                                        <i class="fa fa-envelope-o\\ fa-4x main-menu-link-icon"></i>
                                        CONTACT
                                    </a>
                                </div>
                            </div>


                            <!-- sidebar carousel -->
                            <div class="menu-container">
                                <div class="mauris">
                                    <div id="carousel-menu" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="{{ url('assets/img/hec.jpg') }}" alt="slider" />
                                                {{-- <img class="img-responsive" src="{{ asset('uploads/property/' . $item->images) }}" alt="slider"> --}}
                                                <div class="carousel-caption menu-caption">
                                                    mauris vita
                                                </div>
                                            </div>
                                            @foreach ($property as $item)


                                                <div class="item">
                                                    <img class="img-responsive"
                                                        src="{{ asset('uploads/property/' . $item->images) }}"
                                                        alt="slider">
                                                    <div class="carousel-caption menu-caption">
                                                        lorem ipsum
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-menu" role="button"
                                            data-slide="prev">
                                            <span class="" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-menu" role="button"
                                            data-slide="next">
                                            <span class="" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- .mauris -->
                            </div>
                        </div> <!-- main-menu -->
                    </aside> <!-- main-navigation -->

                    <div class="content-main">
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="banner-main-home">
                                    <div class="banner-main-home-text">
                                        <div class="heading">
                                            <h1>REAL~ESTATE</h1>
                                            <p class="text-uppercase">Management System</p>
                                        </div>
                                        <div class="desc">
                                            <p>Real Estate Management allows you to find your home with less effort
                                                which is within your budget <a rel="nofollow" href="http://facebook.com"
                                                    target="_parent">Facebook</a> Our Facebook Page</p>
                                            <button type="button" class="">SAGITIS SELIT</button>
                                        </div>
                                    </div>
                                    <img src="images/home-img-1.png" alt="Image" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="{{ url('assets/img/pic.jpg') }}" alt="Image" width="100px"
                                            height="250px">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                            <h3 class="text-uppercase">Fully BUILT HOUSES</h3>
                                            <h4 class="text-uppercase">Appartments</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, alias? </p>
                                        <hr />
                                        <div class="col-sm-12 location-main">
                                            <div class="pull-left location">
                                                <i class=""></i><span>HARARE</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class=""></i></a>
                                                <a href="#"><i class=""></i></a>
                                                <a href="#"><i class=""></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="box paris">
                                    <div class="box-icon">
                                        <img src="{{ url('assets/img/hec.jpg') }}" alt="Image" width="100px"
                                            height="250px">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title paris-title">
                                            <h3 class="text-uppercase">FARM LANDS</h3>
                                            <h4 class="text-uppercase">Agricultural Lands</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, nisi? </p>
                                        <hr />
                                        <div class="col-sm-12 location-main">
                                            <div class="pull-left location location2">
                                                <i class=""></i><span>PARIS</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class=""></i></a>
                                                <a href="#"><i class=""></i></a>
                                                <a href="#"><i class=""></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box bottom-main">
                                    <div class="info float-container">
                                        <div class="col-sm-12 bottom-title">
                                            <h3 class="text-uppercase">AVAILABLE PROPERTIES FOR SALE</h3>
                                            <h4 class="text-uppercase">PROPERTIES</h4>
                                        </div>
                                        <div class="row">

                                            @foreach ($property as $item)

                                                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                    <div class="bottom-img">
                                                        <form action="waitlist" method="post">
                                                            @csrf
                                                            <a href=""><img 
                                                                    src="{{ asset('uploads/property/' . $item->images) }}"
                                                                    alt="Image" width="50px" height="175px" ></a>
                                                          <a href="">  <p class="first">{{ $item->location }}
                                                            ${{ $item->price }}<i class="fa fa-cart-arrow-down" aria-hidden="true" style="margin-left:70px"></i></p></a>
                                                                
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>


                                            @endforeach
                                        </div>
                                        {{-- <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> --}}
                                        <p class="bottom-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Iusto facilis veritatis dignissimos? Praesentium asperiores placeat
                                            illum ex eaque perferendis quasi? </p>
                                        <hr />
                                        <div class="col-sm-12 location-main">
                                            <div class="pull-right bottom-user">
                                                <a href="#"><i class=""></i><span>READ MORE</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- .content-main -->
                </div> <!-- .main-page -->
            </div> <!-- .row -->
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                    <p class="copyright">@ Real Estate Management</p>
                </div>
            </footer> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .main-body -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
