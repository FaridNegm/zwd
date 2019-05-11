@extends('website.app')

@section('title')
    Events
@endsection

@section('header')
    {{--header--}}
@endsection

@section('content')

    <!-- banner -->
    <section>
        <div class="inner-banner event-banner">
            <img src="{{url('website')}}/images/banner-event.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>events</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- events -->
    <section class="event-page">
        <div class="container">

            <header class="header">
                <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> Our Events </h2>
                <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                    <p>Maecenas quis auctor velit, ac volutpat mi. Mauris at tincidunt tellus. Praesent augue tortor, </p>
                </div>
            </header>

            <!-- event-wraper  -->
            <section class="event-wraper2">

                <!-- event-area | left column 8 -->
                <div class="event-area2">

                    <!-- single-event box -->
                    <div class="single-event2">

                        <div class="events-thumb aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <iframe width="763" height="332" src="{{url('website')}}/https://www.youtube.com/embed/CsKg1Dfvg7U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                        </div>

                        <div class="events-dtls">
                            <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1000">Fusce suscipit nulla sit amet</h3>
                            <div class="post-nd aos-init" data-aos="fade-up" data-aos-duration="1800">
                                <span class="clock"><img src="{{url('website')}}/images/clock.svg" alt="img" /></span>
                                <span class="date">24 May, 2018</span>
                                <span class="name">Sturard Brought </span>


                            </div>

                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1900">
                                <p>Quisque sodales ut turpis ac hendrerit. Nam ut turpis diam. Mauris vel porttitor tellus. Mauris ut est diam. Aenean venenatis ac tortor eu ullamcorper. Suspendisse sem diam, suscipit ac luctus eu, ullamcorper eu erat. Ut ultricies nisl risus, ut dignissim sapien scelerisque nec. Mauris ornare vitae lacus a finibus. Nunc eleifend condimentum fringilla. Praesent varius ligula sit amet sem sodales, a facilisis lectus lobortis. Sed laoreet egestas tincidunt. Fusce eu nulla iaculis, condimentum massa sed,</p>
                            </div>

                            <a class="btn-effect btn-more2 aos-init" data-aos="fade-up" data-aos-duration="1500" href="single-blog.html">know more</a>

                        </div>
                    </div>

                    <!-- single-event box -->
                    <div class="single-event2">

                        <div class="events-thumb aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <iframe width="763" height="332" src="{{url('website')}}/https://www.youtube.com/embed/A_bUDN5iCbY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                        </div>

                        <div class="events-dtls">
                            <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1000">Fusce suscipit nulla sit amet</h3>
                            <div class="post-nd aos-init" data-aos="fade-up" data-aos-duration="1800">
                                <span class="clock"><img src="{{url('website')}}/images/clock.svg" alt="img" /></span>
                                <span class="date">24 May, 2018</span>
                                <span class="name">Sturard Brought </span>
                            </div>

                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1900">
                                <p>Quisque sodales ut turpis ac hendrerit. Nam ut turpis diam. Mauris vel porttitor tellus. Mauris ut est diam. Aenean venenatis ac tortor eu ullamcorper. Suspendisse sem diam, suscipit ac luctus eu, ullamcorper eu erat. Ut ultricies nisl risus, ut dignissim sapien scelerisque nec. Mauris ornare vitae lacus a finibus. Nunc eleifend condimentum fringilla. Praesent varius ligula sit amet sem sodales, a facilisis lectus lobortis. Sed laoreet egestas tincidunt. Fusce eu nulla iaculis, condimentum massa sed,</p>
                            </div>

                            <a class="btn-effect btn-more2 aos-init" data-aos="fade-up" data-aos-duration="1500" href="single-blog.html">know more</a>

                        </div>
                    </div>

                    <!-- single-event box -->
                    <div class="single-event2">

                        <div class="events-thumb aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <iframe width="763" height="332" src="{{url('website')}}/https://www.youtube.com/embed/b6lvrLO7d_Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                </div>

                        <div class="events-dtls">
                            <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1000">Fusce suscipit nulla sit amet</h3>
                            <div class="post-nd aos-init" data-aos="fade-up" data-aos-duration="1800">
                                <span class="clock"><img src="{{url('website')}}/images/clock.svg" alt="img" /></span>
                                <span class="date">24 May, 2018</span>
                                <span class="name">Sturard Brought </span>
                            </div>

                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1900">
                                <p>Quisque sodales ut turpis ac hendrerit. Nam ut turpis diam. Mauris vel porttitor tellus. Mauris ut est diam. Aenean venenatis ac tortor eu ullamcorper. Suspendisse sem diam, suscipit ac luctus eu, ullamcorper eu erat. Ut ultricies nisl risus, ut dignissim sapien scelerisque nec. Mauris ornare vitae lacus a finibus. Nunc eleifend condimentum fringilla. Praesent varius ligula sit amet sem sodales, a facilisis lectus lobortis. Sed laoreet egestas tincidunt. Fusce eu nulla iaculis, condimentum massa sed,</p>
                            </div>

                            <a class="btn-effect btn-more2 aos-init" data-aos="fade-up" data-aos-duration="1500" href="single-blog.html">know more</a>

                        </div>
                    </div>

                    <div class="pagi2">
                        <a class="pre" href="#"><i class="acro-left-arrow"></i></a>
                        <a class="nxt" href="#"><i class="acro-right-arrow"></i></a>
                    </div>

                </div>

                <div class="sidebar">
                    <!-- keyword-search -->
                    <div class="key-search shop-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                        <h3>Search blog</h3>
                        <input placeholder=" " class="input-search2" type="text" required="">
                    </div>

                    <!-- Related Events -->
                    <div class="related-event2">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">Related Events</h3>

                        <ul class="event-list2">
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="single-blog.html">
                                    <figure>
                                        <img src="{{url('website')}}/images/related-event1.jpg" alt="img" />
                                    </figure>
                                    <div class="evnt-dtls">
                                        <p>Maecenas id nisi mollis tellus lacinia molestie in nec</p>
                                        <span class="event-date">14 Feb, 2016</span>
                                    </div>
                                </a>
                            </li>
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="single-blog.html">
                                    <figure>
                                        <img src="{{url('website')}}/images/related-event2.jpg" alt="img" />
                                    </figure>
                                    <div class="evnt-dtls">
                                        <p>Maecenas id nisi mollis tellus lacinia molestie in nec</p>
                                        <span class="event-date">14 Feb, 2016</span>
                                    </div>
                                </a>
                            </li>
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="single-blog.html">
                                    <figure>
                                        <img src="{{url('website')}}/images/related-event3.jpg" alt="img" />
                                    </figure>
                                    <div class="evnt-dtls">
                                        <p>Maecenas id nisi mollis tellus lacinia molestie in nec</p>
                                        <span class="event-date">21 Feb, 2016</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Courses -->
                    <div class="popular-courses2">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">Popular Courses</h3>

                        <ul class="courses-list2">
                            <li class="active aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="services.html">Acrobat Gymnastic</a>
                            </li>
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="services.html">Adult Gymnastic</a>
                            </li>
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="services.html">Freeg</a>
                            </li>
                            <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                <a href="services.html">Tumbling</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Video Gallery -->
                    <div class="video-gallery" >
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">Video Gallery</h3>
                        <div class="video-box" id="atlanticlight">
                            <video id="myVideo">
                                <source src="{{url('website')}}/video/stock-footage-woman-rock-climbing-and-topping-out.html" type="video/mp4">
                            </video>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" id="playpause" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>Play</title>
                                    <polygon points="12,0 25,11.5 25,39 12,50" id="leftbar" />
                                    <polygon points="25,11.5 39.7,24.5 41.5,26 39.7,27.4 25,39" id="rightbar" />
                                    <animate to="7,3 19,3 19,47 7,47" id="lefttopause" xlink:href="#leftbar" attributeName="points" dur=".3s" begin="indefinite" fill="freeze" />
                                    <animate to="12,0 25,11.5 25,39 12,50" id="lefttoplay" xlink:href="#leftbar" attributeName="points" dur=".3s" begin="indefinite" fill="freeze" />
                                    <animate to="31,3 43,3 43,26 43,47 31,47" id="righttopause" xlink:href="#rightbar" attributeName="points" dur=".3s" begin="indefinite" fill="freeze" />
                                    <animate to="25,11.5 39.7,24.5 41.5,26 39.7,27.4 25,39" id="righttoplay" xlink:href="#rightbar" attributeName="points" dur=".3s" begin="indefinite" fill="freeze" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- ads -->
                    <div class="ads">
                        <img src="{{url('website')}}/images/sidebar-ads1.jpg" alt="ads" />
                    </div>

                    <!-- calendar -->
                    <!-- <div class="calender-box">
                      <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">callender</h3>
                      <div class="calendar aos-init" data-aos="fade-up" data-aos-duration="1300"></div>
                    </div> -->


                </div>
            </section>

        </div>
    </section>
    
@endsection

@section('footer')
    {{--footer--}}
@endsection
