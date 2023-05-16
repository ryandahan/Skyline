@extends('layouts.webBase')
@section('content')
<div class="content">

    <style>
        #carouselExampleCaptions {
            width: 100%;
            height: 100%; /* adjust this value to fit your needs */
            overflow: hidden;
        }

        .carousel-item {
            height: 92vh; /* adjust this value to match the height of the carousel */
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
    <div >

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="{{asset('webAsset/pictures/morocan.JPG')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="    top: 50%;">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://scontent.fdac157-1.fna.fbcdn.net/v/t1.6435-9/83977763_902631983490704_2318730311988412416_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGaogfhx3uPUq3xJLXBXpPlK2fyK4RD-7MrZ_IrhEP7s_BAA7mQZUzLT9beBwWcqhrJyWA_aQwjD_IKPnXhCuim&_nc_ohc=8Mf5UgFkohoAX_cgD1p&_nc_ht=scontent.fdac157-1.fna&oh=00_AfDODgNuEuVP_uusg8kF1apPlOn8FZNkk7DEgxs94M1jzw&oe=646500D1" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="    top: 50%;">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://scontent.fdac157-1.fna.fbcdn.net/v/t1.6435-9/182375749_762983274416077_3498778242335587953_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH6Szul0kxD94QE1-SYPPuIznqCrAYo96POeoKsBij3o0R612Zd8v2DPmS09EhVoSIwOaIlFfP4puRAvNvdJTIF&_nc_ohc=bk02OB_vdy0AX-yg9H-&_nc_ht=scontent.fdac157-1.fna&oh=00_AfD3kLs1bTG59OaT5ofNM1pHmmGy5TdyvQ4sd53FKswcnQ&oe=6464ED5D" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"  style="    top: 50%;">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

{{--    <header class="w3-display-container w3-content w3-wide" style="max-width:1200px;" id="home">--}}

{{--        <img src="{{asset('webAsset/pictures/morocan.JPG')}}"  width="1200" height="800">--}}
{{--        <div class="w3-display-middle w3-margin-top w3-center">--}}
{{--        </div>--}}
{{--    </header>--}}
    <div>
        <!-- Page content -->
        <div class="w3-content w3-padding" style="max-width: 1564px">
            <!-- Project Section -->
            <div class="w3-container w3-padding-32" id="projects">
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
                    what we offer
                </h3>
            </div>

            <div class="w3-row-padding">
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">
                            morocan style
                        </div>
                        <a href="{{route('option','morocan')}}">
                            <img src="{{asset('webAsset/pictures/morocan.JPG')}}" alt="House" style="width: 100%"/>
                        </a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">
                            yemeni style
                        </div>
                        <a href="{{route('option','Yemeni')}}">
                            <img src="{{asset('webAsset/pictures/yemeni.JPG')}}" alt="House" style="width: 100%"/></a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">
                            modern style
                        </div>
                        <a href="{{route('option','modern')}}">
                            <img src="{{asset('webAsset/pictures/modren.JPG')}}" alt="House" style="width: 100%"/></a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">curtains</div>
                        <a href="{{route('option','Curtain')}}"
                        ><img
                                src="{{asset('webAsset/pictures/curtain.JPG')}}"
                                alt="House"
                                style="width: 100%"
                            /></a>
                    </div>
                </div>
            </div>

            <div class="w3-row-padding">
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">tables</div>
                        <a href="{{route('option','table')}}">
                            <img src="{{asset('webAsset/pictures/tables.jpg')}}" alt="House" style="width: 99%"
                            /></a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">
                            just spung
                        </div>
                        <a href="{{route('spung')}}"
                        ><img src="{{asset('webAsset/pictures/foam.JPG')}}" alt="House" style="width: 99%"
                            /></a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">fabric</div>
                        <a href="{{route('fabric')}}"
                        ><img src="{{asset('webAsset/pictures/fabric.JPG')}}" alt="House" style="width: 99%"
                            /></a>
                    </div>
                </div>
                <div class="w3-col l3 m6 w3-margin-bottom" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="w3-display-container">
                        <div class="w3-display-topleft w3-black w3-padding">rugs</div>
                        <a href="{{route('option','rugs')}}"
                        ><img src="{{asset('webAsset/pictures/rug.jpg')}}" alt="House" style="width: 99%"
                            /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="TEST">
            <style>
                .parallax {
                    /* The image used */
                    background-image: url("http://demo129.xyz/storage/uploads/J2Dyj4lixGJdPnETY88Pd2dbS01Bvh1VGyza9X0y.jpg");

                    /* Set a specific height */
                    height: 500px;

                    /* Create the parallax scrolling effect */
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;

                    /* Add some overlay to make text more readable */
                    position: relative;
                }

                /* Overlay for the parallax image */
                .parallax::after {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.3);
                }

                /* Center text vertically and horizontally */
                .parallax .d-flex {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    color: #fff;
                    font-size: 4rem;
                    text-shadow: 2px 2px 4px #000;
                }

            </style>
            <div class="parallax"> <div class="d-flex align-items-center">
                    <h1 style="background-color: rgba(24,19,3,0.53); opacity: 0.8; border-radius: 10px;">Transform Your Home with Style and Elegance - Furniture and Curtains by SkyLine Furniture</h1>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="w3-container w3-padding-32 d-none" id="about" >
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
                About
            </h3>
            <p>
                we are a Furniture store that is located in
                <a
                    href="https://www.google.com/maps/place/Skyline+Furniture/@40.6085158,-75.6406445,9z/data=!4m9!1m2!2m1!1sskyline+furniture!3m5!1s0x89c24551bcc51a81:0xb77b0dc0449968f9!8m2!3d40.635293!4d-74.0204365!15sChFza3lsaW5lIGZ1cm5pdHVyZVoTIhFza3lsaW5lIGZ1cm5pdHVyZZIBD2Z1cm5pdHVyZV9zdG9yZQ"
                    target="_blank"
                >Bay Ridge, Brooklyn</a
                >
                we have been in the business of Furniture for decades. Quality is our
                first priority, we use the highest grade of wood and fabrics combines
                beauity and quality to sustain years of use.
            </p>
        </div>

        <div class="w3-row-padding w3-grayscale d-none">
            <div class="w3-col l3 m6 w3-margin-bottom" data-aos="zoom-in-up" data-aos-duration="3000">
                <img class="cardImg" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80" alt="John" style="width: 100%" />
                <h3>ziyad</h3>
                <p class="w3-opacity">CEO & Founder</p>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse
                    sodales pellentesque elementum.
                </p>
                <p>
                    <button class="w3-button w3-light-grey w3-block">Contact</button>
                </p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom" data-aos="zoom-in-up" data-aos-duration="3000">
                <img class="cardImg" src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2960&q=80" alt="Jane" style="width: 100%" />
                <h3>ryan</h3>
                <p class="w3-opacity">Architect</p>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse
                    sodales pellentesque elementum.
                </p>
                <p>
                    <button class="w3-button w3-light-grey w3-block">Contact</button>
                </p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom" data-aos="zoom-in-up" data-aos-duration="3000">
                <img class="cardImg" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=922&q=80" alt="Mike" style="width: 100%" />
                <h3>hana</h3>
                <p class="w3-opacity">Architect</p>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse
                    sodales pellentesque elementum.
                </p>
                <p>
                    <button class="w3-button w3-light-grey w3-block">Contact</button>
                </p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom" data-aos="zoom-in-up" data-aos-duration="3000">
                <img class="cardImg" src="https://images.unsplash.com/photo-1560365163-3e8d64e762ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80" alt="Dan" style="width: 100%" />
                <h3>kareem</h3>
                <p class="w3-opacity">Architect</p>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse
                    sodales pellentesque elementum.
                </p>
                <p>
                    <button class="w3-button w3-light-grey w3-block">Contact</button>
                </p>
            </div>
        </div>


        <!-- Contact Section -->
        <div class="container m-auto">
            <div class="w3-container w3-padding-32" id="contact">
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">
                    Contact
                </h3>
                <p>
                    Lets get in touch and talk about your next project you can call us at
                    <a href="tel:+9293316466">9293316466</a>
                </p>
                <section class="deneb_cta text-black fw-bold ">
                    <div class="container">
                        <div class="cta_wrapper">
                            <div class="row align-items-center">
                                <form method="post" class="" action="{{ route('contacts.contact.store') }}" >
                                    @csrf
                                    @include ('contacts.form', [
                                                      'contact' => null,
                                                    ])
                                    <button class="w3-button w3-black w3-section float-end mt-4" type="submit">
                                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>

        <!-- Image of location/map -->

        <!-- End page content -->
    </div>
</div>
@endsection
