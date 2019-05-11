@extends('website.app')

@section('title')
    About
@endsection

@section('header')
    {{--header--}}
@endsection

@section('content')

    <!-- banner -->
    <section class="inner-banner about">
        <div>
            <img src="{{url('website')}}/images/rawpixel-586687-unsplash.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>about Us</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- arco event section -->
    <section>
        <div class="container">
            <div class="event about-evnt">
                <header class="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> ZWD <br/> AGENCY .. </h2>

                </header>

                <div class="abt-sec-1">

                    <div class="left">
                        <figure>
                            <img src="{{url('website')}}/images/acro-event1a.jpg" alt="img" />
                        </figure>
                    </div>

                    <div class="right">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="700">our history</h3>

                        <div class="aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus libero lectus, nec pellentesque magna faucibus elementum. Nulla consectetur sit amet arcu non rhoncus. In vestibulum varius feugiat. Nam risus nisl, ornare non elementum vitae, pellentesque sed sem. Cras sagittis ultricies eros volutpat cursus. Donec justo erat</p>
                        </div>

                        <div class="aos-init" data-aos="fade-up" data-aos-duration="900">
                            <p>Proin facilisis, justo at tristique elementum, nisl metus porta sem, in tincidunt diam lectus in dolor. Aliquam placerat rhoncus placerat. Cras vitae accumsan risus. Praesent interdum.Proin posuere ipsum sed tempus facilisis. Sed viverra imperdiet justo. Integer sed placerat sapien, feugiat laoreet arcu. Curabitur maximus ligula eu dui fringilla varius vel non ante</p>
                        </div>

                        <div class="aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <p>Mauris id diam hendrerit, euismod est in, euismod sapien. Maecenas pretium, mi vel mollis consequat, ligula arcu viverra felis, id sodales purus est sed purus. Aliquam faucibus lobortis turpis at vehicula. Pellentesque habitant morbi tristique senectus et netus et </p>
                        </div>

                        <strong class="aos-init" data-aos="fade-up" data-aos-duration="1900"> Founded in 1983 </strong>


                        <!-- <div class="sign aos-init" data-aos="zoom-in" data-aos-duration="1500">
                          <img src="./images/sign.png" alt="signature img" />
                          <span>Founder acro</span>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- progress Section -->
    <div id="progress-row">
        <div class="container">
            <div class="progress-box">

                <div class="circle-box">
                    <div id="clientRetention">
                        <strong></strong>
                    </div>
                    <div class="pb-cap">
                        Client Retention
                    </div>
                </div>
                <div class="circle-box">
                    <div id="services">
                        <strong></strong>
                    </div>
                    <div class="pb-cap">
                        11 Years of Services
                    </div>
                </div>
                <div class="circle-box">
                    <div id="professional">
                        <strong></strong>
                    </div>
                    <div class="pb-cap" >
                        Professional
                    </div>
                </div>
                <div class="circle-box">
                    <div id="clients">
                        <strong></strong>
                    </div>
                    <div class="pb-cap">
                        Satisfied Clients
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    {{--footer--}}
@endsection
