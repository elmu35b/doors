<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DoorStepView</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/faviconx.ico') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    {{-- <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Company</a>
        <a href="#">CCTV</a>
        <a href="#">Testimonial</a>
        <a href="#">Contact Us</a>
    </div> --}}
    <div class="padd_30">
        <div class="full_bf">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="logo">
                                    <a href="#">DoorStepView</a>
                                </div>
                            </div>
                            {{-- <div class="col-sm-9">
                                <ul class="email text_align_right">
                                    <li> <button class="openbtn" onclick="openNav()"><img
                                                src="images/menu_btn.png"></button>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </header>

            <!-- end header -->
            <!-- start slider section -->
            <div class="banner_main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li> -->
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-max">
                                <div class="carousel-caption relative">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="bluid">
                                                <h1>{{ __('Transforming Real Estate')['l'] }} </h1>
                                                <br>
                                                <!-- <span>
                                       Anywhere CCTV Camera
                                    </span> -->
                                                <p>
                                                    {{ __('Transforming Real Estate')['l1'] }}
                                                </p>
                                                <p>
                                                    {{ __('Transforming Real Estate')['l2'] }}
                                                </p>
                                                <!-- <a class="read_more" href="Javascript:void(0)">Read More </a> -->
                                                {{-- <a class="read_more" href="contact.html">Contact Us </a> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pan_img">
                                                <figure><img src="{{ asset('images/1w.jpg') }}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner_main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-max">
                                <div class="carousel-caption relative">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="bluid">
                                                <h1>{{ __('How It Works')['l'] }} </h1>
                                                <p>
                                                    <b>
                                                        {{ __('How It Works')['l1'] }}
                                                    </b>
                                                </p>
                                                <p>
                                                    {{ __('How It Works')['l2'] }}
                                                </p>
                                                <!-- <a class="read_more" href="Javascript:void(0)">Read More </a> -->
                                                {{-- <a class="read_more" href="contact.html">Contact Us </a> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pan_img">
                                                <figure><img src="{{ asset('images/units_lock.png') }}"
                                                        alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- about -->

    <!-- end about -->
    <!-- cameras -->
    <div class="cameras">
        <div class="container-max">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Our CCTV Cameras</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="ho_bg" class="cameras_text">
                        <div class="cameras_img text_align_center">
                            <figure><img style="width: 400px; height:300px"
                                    src="{{ asset('images/' . __('Our Solution Products')['1']['i']) }}"
                                    alt="#" /></figure>
                        </div>
                        {{-- <p>Price<br><span>$5000.00</span></p> --}}
                        <h3>{{ __('Our Solution Products')['1']['t'] }}</h3>
                        <h6>{{ __('Our Solution Products')['1']['c'] }}</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_bg" class="cameras_text">
                        <div class="cameras_img text_align_center">
                            <figure><img style="width: 400px; height:300px"
                                    src="{{ asset('images/' . __('Our Solution Products')['2']['i']) }}"
                                    alt="#" /></figure>
                        </div>
                        <h3>{{ __('Our Solution Products')['2']['t'] }}</h3>
                        <h6>{{ __('Our Solution Products')['2']['c'] }}</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_bg" class="cameras_text">
                        <div class="cameras_img text_align_center">
                            <figure><img style="width: 400px; height:300px"
                                    src="{{ asset('images/' . __('Our Solution Products')['3']['i']) }}"
                                    alt="#" /></figure>
                        </div>
                        {{-- <p>Price<br><span>$5000.00</span></p> --}}
                        <h3>{{ __('Our Solution Products')['3']['t'] }}</h3>
                        <h6>{{ __('Our Solution Products')['3']['c'] }}</h6>

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end cameras -->
    <!-- projects -->

    <!-- end choose -->
    <!-- clients -->
    <div class="clients">
        <div class="clients_bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titlepage text_align_center">
                            <h2>{{ __('Why Choose Us')['l'] }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start slider section -->
        <div id="testi" class="carousel slide clients_banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#testi" data-slide-to="0" class="active"></li>
                {{-- <li data-target="#testi" data-slide-to="1"></li>
                <li data-target="#testi" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption testi">
                            <div class="row d_flex">
                                <div class="col-md-12">
                                    <div class="cli_flef">

                                        <div class="test_box text_align_left">

                                            <p>{{ __('Why Choose Us')['l1'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Request a call back</h2>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class="col-md-6">
                    <form id="request" class="main_form" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" required placeholder="Name" type="text" name="name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" required placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" required placeholder="Phone" type="text" name="phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" required placeholder="Message" type="text" name="message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">{{ __('Send') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form id="request" class="main_form" action="{{ route('contact.store') }}" method="POST">
                        <div class="contact_img text_align_center">
                            <figure><img src="{{ asset('images/logo_transparent.png') }}" alt="#"
                                    style="height: 300px; width 300px" /></figure>
                        </div>
                        <div class="col-md-12 mb-2">
                            <a href="tel:+966544615194" class="send_btn text_align_center">{{ __('Call Us') }}</a>
                        </div>


                        <div class="col-md-12 mt-2">
                            <a href="email:info@doorstepview.com" class="send_btn text_align_center">{{ __('Email Us') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <!-- footer -->
    <footer>
        <div class="footer" style="background-color: white">
            <div class="col-md-10 offset-md-1 copyright text_align_center">
                <p>© 2023 All Rights Reserved. Product by <a href="https://vujadesa.com/">VujaDe</a></p>
            </div>

            <div class="copyright text_align_center">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
