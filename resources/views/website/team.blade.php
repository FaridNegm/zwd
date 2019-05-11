@extends('website.app')

@section('title')
    Team
@endsection

@section('header')
    <style>
        .pagination {
            display: -ms-flexbox;
            display: flex;
            width: 150px;
            margin: 0 auto;
            -ms-flex-pack: center;
                justify-content: center;
            -ms-flex-align: center;
                align-items: center;
            border: 1px solid #707070;
            border-radius: 30px;
            padding: 10px 20px;
            }

            .pagination li {
            display: inline-block;
            width: auto;
            float: left;
            padding: 0 8px;
            }

            .pagination li a {
            font-family: "Montserrat", sans-serif;
            font-size: 16px;
            font-weight: 300;
            color: #a6a6a6;
            }

            .pagination li a:hover, .pagination li a:focus {
            color: #353535;
            }

            .pagination .active a {
            color: #353535;
            }

            .pagination .pre a, .pagination .nxt a {
            font-weight: 100;
            }

            .pagination2 {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: row;
                flex-direction: row;
            -ms-flex-pack: center;
                justify-content: center;
            -ms-flex-align: center;
                align-items: center;
            }

            .pagination2 a {
            font-size: 22px;
            line-height: 22px;
            padding: 12px 18px;
            border: 1px solid #ddd;
            color: #999;
            }

            .pagination2 .pre {
            border-right: none;
            }

    </style>
@endsection

@section('content')

    <!-- banner -->
    <section>
        <div class="inner-banner coach-banner">
            <img src="{{url('website')}}/images/rawpixel-661919-unsplash.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>team members</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-sec">
        <div class="container">
            <header id="header">
                <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> team members </h2>
                <div class="aos-init" data-aos="fade-up" data-aos-duration="1500">
                    <p>Fusce eget magna id nibh suscipit elementum. Praesent at leo auctor, eleifend ipsum at, ultricies nisi. Aliquam erat volutpat.</p>
                </div>
            </header>

            <div class="team team-page">
                @foreach($users as $user)
                    <div class="tm-box aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <div class="tm-social">
                            <ul>
                                <li><a href="{{$user->facebook}}" target="_blank"><i class="acro-facebook-logo"></i></a></li>
                                <li><a href="{{$user->twitter}}" target="_blank"><i class="acro-twitter"></i></a></li>
                                <li><a href="{{$user->instegram}}" target="_blank"><i class="acro-behance-logo"></i></a></li>
                                <li><a href="{{$user->facebook}}" target="_blank"><i class="acro-vimeo-logo"></i></a></li>
                            </ul>
                        </div>
                        <div class="tm-body">
                            <figure>
                                <img src="{{url('admin/images/users/'.$user->image)}}" alt="img" style="height: 435px;"/>
                            </figure>
                            <a class="viewdetails" href="#"  data-toggle="modal" data-target="#{{$user->name}}"><img src="{{url('website')}}/images/view1.png" alt="view" /></a>
                        </div>
                        <div class="tm-footer">
                            <strong>{{$user->name}}</strong>
                            <span>Woman Gymnastics</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <br><br><br>
            {{ $users->render() }}

            <!-- Modal -->
            @foreach($users as $user)
                <div class="modal fade" id="{{$user->name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content tmdt-modal">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-wraper">
                                <figure>
                                    <img src="{{url('admin/images/users/'.$user->image)}}" alt="img" style="width: 175px;height: 175px; border-radius: 50%; overflow: visible;"/>
                                </figure>

                                <div class="tm-dtls">
                                    <h3>{{$user->name}}</h3>
                                    <span>Woman Gymnastics</span>

                                    <p>{{$user->description}}</p>
                                    {{--<strong>10 Years of experiences</strong>--}}

                                    <ul class="tmdtl-social">
                                        <li><a href="{{$user->facebook}}"><i class="acro-facebook-logo"></i></a></li>
                                        <li><a href="{{$user->twitter}}"><i class="acro-twitter"></i></a></li>
                                        <li><a href="{{$user->instegram}}"><i class="acro-behance-logo"></i></a></li>
                                        <li><a href="{{$user->facebook}}"><i class="acro-vimeo-logo"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('footer')
    {{--footer--}}
@endsection
