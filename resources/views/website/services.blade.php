@extends('website.app')

@section('title')
    All Services
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
        <div class="inner-banner banner-gallery">
            <img src="{{url('website')}}/images/alex-litvin-790876-unsplash.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>Services </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section>
        <div class="container">
            <div class="gallery">

                <section class="clearfix">
                    <div class="container">
                        <div class="gallery">
                            <header class="header">
                                <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> ZWD Services </h2>
                                <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                                    <p>Aliquam convallis neque quis pretium viverra. Proin maximus libero ac porttitor fermentum. Donec aliquet dui sed ultricies semper. Praesent ac blandit dolor. Etiam id posuere ex.</p>
                                </div>
                            </header>

                            <div class="gallery-box">
                                <div class="grid-uploads">

                                    <div class="uploads-row">
                                        @foreach($services as $service)
                                            <div class="col-media box-height1 {{ $service->category}}">
                                                <div class="thumbnail">

                                                    <div class="col-media-item col-media-icon">
                                                        <img class="aos-init example-image" src="{{url('admin/images/services/'.$service->image)}}" alt="gallery image" style="height: 280px;"/>

                                                        <div class="overlay right">
                                                            <a class="view" href="{{url('admin/images/services/'.$service->image)}}" data-lightbox="gallery-image" data-title="{{$service->title}}">
                                                                <img src="{{url('website')}}/images/view.png" alt="img" />
                                                            </a>
                                                            <div class="text">
                                                                {{$service->title}}
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div><!-- /.uploads-row -->
                                </div><!-- /.grid-uploads -->
                            </div>
                        </div>
                    </div>
                </section>

                {{$services->render()}}

            </div>
        </div>
    </section>

@endsection

@section('footer')
    {{--footer--}}
@endsection
