@extends('website.app')

@section('title')
    Single Service
@endsection

@section('header')


@endsection

@section('content')


    <!-- banner -->
    <section>
    @foreach($single_service as $service)
      <div class="inner-banner event-banner">
        <img src="{{url('website')}}/images/banner-services.jpg" alt="banner-image" />
        <div class="container">
          <div class="caption">
            <h1>{{ $service->title }}</h1>
          </div>
        </div>
      </div>
    @endforeach
    </section>

    <!-- events -->

        <section class="event-page">
            <div class="container">
                @foreach($single_service as $service)
                <header class="header">
                <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> {{ $service->title }} </h2>
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
                        <img src="{{url('admin/images/services/'.$service->image)}}" alt="img" style="width:100%;height:350px;"/>

                        </div>

                        <div class="events-dtls">
                        <div class="post-nd aos-init" data-aos="fade-up" data-aos-duration="1800">
                            <span class="clock"><img src="{{url('website')}}/images/clock.svg" alt="img" /></span>
                            <span class="date">{{ $service->created_at->diffForHumans() }}</span>
                            <span class="name">Sturard Brought </span>

                            {{--  <ul class="events-social2">
                                <li><a href="#"><i class="acro-facebook-logo"></i></a></li>
                                <li><a href="#"><i class="acro-twitter"></i></a></li>
                                <li><a href="#"><i class="acro-behance-logo"></i></a></li>
                                <li><a href="#"><i class="acro-vimeo-logo"></i></a></li>
                            </ul>  --}}
                        </div>

                        <div class="aos-init" data-aos="fade-up" data-aos-duration="1900">
                            <p>{{ $service->body }}</p>
                        </div>

                        </div>
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
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">Related Services</h3>

                        <ul class="event-list2">
                            @foreach ($related_services as $related_service)
                                <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                    <a href="single-blog.html">
                                    <figure>
                                        <img src="{{url('admin/images/services/'.$related_service->image)}}" alt="img" style="height:45px;"/>
                                    </figure>
                                    <div class="evnt-dtls">
                                        <p>{{ str_limit($related_service->body , 70) }}</p>
                                        <span class="event-date">{{ $related_service->created_at }}</span>
                                    </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- calendar -->
                    <!-- <div class="calender-box">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">callender</h3>
                        <div class="calendar aos-init" data-aos="fade-up" data-aos-duration="1300"></div>
                    </div> -->


                    </div>
                </section>
            @endforeach
            </div>
        </section>


@endsection

@section('footer')

@endsection
