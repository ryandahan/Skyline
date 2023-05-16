<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SkyLine Furniture</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="middleEastern furniture" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="fab" href="{{asset('/fab.png')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        body {
            background-color: white;
        }
        .cardImg {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 5px;
        }

    </style>

    <style>
        /* default styles */
        .image_size_from {
            height: 140px !important;
            width: 100%;
            object-fit: cover;
        }

        /* styles for screens smaller than 768px */
        @media (max-width: 767px) {
            .image_size_from {
                height: 200px !important;
            }
        }
    </style>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{--    sweetalert--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <meta name="google-site-verification" content="yTGKzGSrAgLfDAJRT06i0ntKmyiky56YIt5w2PhT0RA" />

</head>
<body>

<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <a href="{{ route('index') }}#home" class="navbar-brand" style="color: #feb000; text-shadow: 1px 1px 2px #000000; font-size: 30px; font-weight: bold; letter-spacing: 2px;">SkyLine <span style="color: black;">Furniture</span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">

                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" href="{{route('index')}}#projects">What we offer</a>
                    <a class="nav-item nav-link" href="{{route('index')}}#contact">Contact</a>
                    <a class="nav-item nav-link" href="mailto:reen113355@gmail.com">Email</a>

                    <a class="pngwing.com (1).png" href="https://www.facebook.com/skylinefurniture2016/">
                        <img src="{{asset('webAsset/pictures/fb2.png')}}" alt="facebook" style="height: 25px; width: 35px; margin-top: 5px;margin-left: 5px">
                    </a>
                    <a class="" href="https://www.instagram.com/skytrading/?hl=en">
                        <img src="{{asset('webAsset/pictures/ins.png')}}" alt="instagram" style="height: 25px; width: 27px; margin-top: 5px;margin-left: 10px;margin-right: 10px">
                    </a>
                    <a href="{{route('login')}}" class="nav-item nav-link  ml-2" >Login</a>
                </div>
            </div>
        </div>
    </nav>
</div>


@include('layouts.flash_sms')

   <div>
       @yield('content')
   </div>


{{--<footer class="w3-center w3-black w3-padding-16">--}}

{{--</footer>--}}


@yield('script')



<div @if(Route::currentRouteName() != 'index')  style="margin-top:300px"  @endif>
        <div class="footer" style="background-color: #26272b; color: white">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
            <footer class="deneb_footer">
                <div class="widget_wrapper" style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="widget widegt_about">
                                    <div class="widget_title">
                                        <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                                    </div>
                                    <a href="{{ route('index') }}#home" class="navbar-brand" style="color: #feb000; text-shadow: 2px 2px #000000; font-size: 30px; font-weight: bold;">SkyLine <span style="color: #FFFFFF;">Furniture</span></a>

                                    <p>Transform your space with SkyLine Furniture and Curtains - Your one-stop-shop for elegant and comfortable living.</p>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/skylinefurniture2016/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/skytrading/?hl=en"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/skytrading/?hl=en"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="widget widget_link">
                                    <div class="widget_title">
                                        <h2>Links</h2>
                                    </div>
                                    <ul>
                                        <li><a href="{{route('index')}}">Home</a></li>
                                        <li><a href="{{route('option','morocan')}}">Morocan</a></li>
                                        <li><a href="{{route('option','Yemeni')}}">Yemeni</a></li>
                                        <li><a href="{{route('option','modern')}}">Modern</a></li>
                                        <li><a href="{{route('option','Curtain')}}">Modern</a></li>
                                        <li><a href="{{route('option','table')}}">Table</a></li>
                                        <li><a href="{{route('option','rugs')}}">Rugs</a></li>
                                        <li><a href="/fabric">fabric</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="widget widget_contact">
                                    <div class="widget_title">
                                        <h2>Contact Us</h2>
                                    </div>
                                    <div class="contact_info">
                                        <div class="single_info">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="info">
                                                <p><a href="tel:+919246147999">9293316466</a></p>
                                            </div>
                                        </div>
                                        <div class="single_info">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="info">
                                                <p><a href="mailto:info@deneb.com">reen113355@gmail.com</a></p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.7533541143493!2d-74.02305082404195!3d40.63532104230631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24551bccaa32f%3A0x49dc206d88427215!2s6710%205th%20Ave%2C%20Brooklyn%2C%20NY%2011220%2C%20USA!5e0!3m2!1sen!2sbd!4v1683833732368!5m2!1sen!2sbd"  height="300" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            <div class="info">
                                                <a class="text-decoration-none"
                                                    href="https://www.google.com/maps/place/Skyline+Furniture/@40.6085158,-75.6406445,9z/data=!4m9!1m2!2m1!1sskyline+furniture!3m5!1s0x89c24551bcc51a81:0xb77b0dc0449968f9!8m2!3d40.635293!4d-74.0204365!15sChFza3lsaW5lIGZ1cm5pdHVyZVoTIhFza3lsaW5lIGZ1cm5pdHVyZZIBD2Z1cm5pdHVyZV9zdG9yZQ"
                                                    target="_blank"
                                                >6710 5th Ave, Brooklyn, NY 11220</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright_area" style="background-color: #26272b; color: white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" text-center text-white">
                                    <p>Copyright &copy; 2023 All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .deneb_footer .widget_wrapper {
                        background-repeat: no-repeat;
                        background-size: cover;
                        padding-top: 200px;
                        padding-bottom: 70px;
                    }
                    @media (max-width: 767px) {
                        .deneb_footer .widget_wrapper .widget {
                            margin-bottom: 40px;
                        }
                    }
                    .deneb_footer .widget_wrapper .widget .widget_title {
                        margin-bottom: 30px;
                    }
                    .deneb_footer .widget_wrapper .widget .widget_title h4 {
                        font-weight: bold;
                    }
                    .deneb_footer .widget_wrapper .widget .widget_title h4:after {
                        content: "";
                        display: block;
                        max-width: 38px;
                        height: 2px;
                        margin-top: 5px;
                    }
                    .deneb_footer .widget_wrapper .widegt_about p {
                        margin-bottom: 20px;
                    }
                    .deneb_footer .widget_wrapper .widegt_about .social li {
                        display: inline-block;
                        margin-right: 10px;
                    }
                    .deneb_footer .widget_wrapper .widegt_about .social li a {
                        display: block;
                        width: 30px;
                        height: 30px;
                        line-height: 30px;
                        text-align: center;
                        border-radius: 50%;
                        background-color: #f9e6d4;
                        color: #fba543;
                        font-size: 14px;
                        -webkit-transition: all all 0.5s ease-out 0s;
                        -moz-transition: all all 0.5s ease-out 0s;
                        -ms-transition: all all 0.5s ease-out 0s;
                        -o-transition: all all 0.5s ease-out 0s;
                        transition: all all 0.5s ease-out 0s;
                    }
                    .deneb_footer .widget_wrapper .widegt_about .social li a:hover,
                    .deneb_footer .widget_wrapper .widegt_about .social li a:focus {
                        background-image: -moz-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        background-image: -webkit-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        background-image: -ms-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        color: #fff;
                        box-shadow: 2.5px 4.33px 15px 0px rgba(254, 176, 0, 0.4);
                    }
                    .deneb_footer .widget_wrapper .widget_link ul li {
                        margin-bottom: 5px;
                    }
                    .deneb_footer .widget_wrapper .widget_link ul li a {
                        text-transform: capitalize;
                        color: #7a808d;
                    }
                    .deneb_footer .widget_wrapper .widget_link ul li a:hover,
                    .deneb_footer .widget_wrapper .widget_link ul li a:focus {
                        color: #feb000;
                    }
                    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
                        max-width: 250px;
                        display: flex;
                        flex-wrap: wrap;
                        margin-bottom: 20px;
                    }
                    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
                        font-size: 12px;
                        color: #feb000;
                        margin-right: 10px;
                    }
                    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p a {
                        color: #7a808d;
                    }
                    .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
                        display: block;
                    }

                    .deneb_footer .copyright_area {
                        background: #edecf0;
                        padding: 10px 0;
                    }
                    .deneb_footer .copyright_area .copyright_text {
                        text-align: center;
                    }
                    .deneb_footer .copyright_area .copyright_text p {
                        color: #011a3e;
                    }
                    .deneb_footer .copyright_area .copyright_text p span {
                        color: #feb000;
                    }
                    .deneb_cta .cta_wrapper {
                        padding: 45px 30px 42px;
                        max-width: 970px;
                        border-radius: 15px;
                        margin: auto;
                        margin-bottom: -135px;
                        position: relative;
                        background-image: -moz-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        background-image: -webkit-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        background-image: -ms-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
                        box-shadow: 2.5px 4.33px 15px 0px rgba(254, 176, 0, 0.4);
                        z-index: 1;
                    }
                    .deneb_cta .cta_wrapper:after {
                        content: "";
                        background-position: bottom;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        z-index: -1;
                    }
                    .deneb_cta .cta_wrapper .cta_content h3 {
                        color: #fff;
                        font-weight: bold;
                    }
                    @media (max-width: 767px) {
                        .deneb_cta .cta_wrapper .cta_content h3 {
                            font-size: 24px;
                        }
                    }
                    .deneb_cta .cta_wrapper .cta_content h3:after {
                        content: "";
                        display: block;
                        max-width: 110px;
                        height: 2px;
                        margin-top: 13px;
                        margin-bottom: 24px;
                    }
                    .deneb_cta .cta_wrapper .cta_content p {
                        color: #fff;
                    }
                    .deneb_cta .cta_wrapper .button_box {
                        float: right;
                    }
                    @media only screen and (min-width: 768px) and (max-width: 991px) {
                        .deneb_cta .cta_wrapper .button_box {
                            float: none;
                            text-align: left;
                            margin-top: 30px;
                        }
                    }
                    @media (max-width: 767px) {
                        .deneb_cta .cta_wrapper .button_box {
                            float: none;
                            text-align: center;
                            margin-top: 30px;
                        }
                    }
                    .deneb_cta .cta_wrapper .button_box .deneb_btn {
                        background: #fff;
                        color: #011a3e;
                    }
                    .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
                    .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
                        box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
                    }
                </style>
            </footer>
        </div>
    </div>




<button id="scroll-to-top-btn" onclick="scrollToTop()"></button>

<style>
    #scroll-to-top-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        width: 55px;
        height: 55px;
        background-color: #ffc107;
        color: #fff;
        font-size: 20px;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        border: none;
        outline: none;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #scroll-to-top-btn:hover {
        background-color: #c79706;
    }

    #scroll-to-top-btn::before {
        content: "\2191";
        font-size: 30px;
    }


    h1, h2 {
        color: #feb000;
        text-shadow: 2px 2px #000000;
    }

</style>

<script>
    // Get the button element
    var scrollToTopBtn = document.getElementById("scroll-to-top-btn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    };

    // When the user clicks on the button, scroll to the top of the document
    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

<script>
    function chosemainfabric(id){
        $('#main_fabric').val(id);

        $('#mainfabric .selected').removeClass('selected');

        $('#main' + id).addClass('selected');

    }

    function choseinnerfabric(id){
        $('#inner_fabric').val(id);

        $('#innerfabric .selected').removeClass('selected');

        $('#inner' + id).addClass('selected');

    }
    function chosefabric(id){
        $('#main_fabric').val(id);

        $('#mainfabric .selected').removeClass('selected');

        $('#main' + id).addClass('selected');

    }


    function choserug(id){
        $('#rug_style').val(id);

        $('#choserugstyle .selected').removeClass('selected');

        $('#inner' + id).addClass('selected');

    }
    function tabledesign(id){
        $('#table_design').val(id);

        $('#table_designs .selected').removeClass('selected');

        $('#inner' + id).addClass('selected');

    }


    function curtains(id){
        $('#certain_style').val(id);

        $('#curtainsstyle .selected').removeClass('selected');

        $('#curtains' + id).addClass('selected');

    }

</script>

<script>
    const radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach((radio) => {
        const label = radio.closest('label');
        label.addEventListener('click', () => {
            radio.checked = true;
        });
    });

</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    AOS.init();
</script>
</body>
</html>
