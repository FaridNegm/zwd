@extends('website.app')

@section('title')
    All Projects
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
        <div class="inner-banner service">
            <img src="{{url('website')}}/images/banner-services.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1> ZWD Projects</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- blog  -->
    <section class="blogsection">
      <div class="container">
        <div class="blog-row">

          <header id="header">
            <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> All Projects</h2>
            <div class="aos-init" data-aos="fade-up" data-aos-duration="1500">
              <p>Maecenas quis auctor velit, ac volutpat mi. Mauris at tincidunt tellus. Praesent augue tortor </p>
            </div>
          </header>

          <section>
            <ul class="blog-list">
            @foreach ($posts as $post)
              <li>

                <div class="blog-thumbnail">
                  <img src="{{url('admin/images/posts/'.$post->image)}}" alt="blog" />
                </div>

                <div class="blog-details">

                  <h3>{{ $post->title }}</h3>

                  <div class="adc">
                    <span class="author">John Smith</span>
                    <span class="date">03 February</span>
                    <span class="comment">0 Comments</span>
                  </div>

                  <p>{{ str_limit($post->body , 400) }}</p>


                  <ul class="blog-social">
                    <li><a href="#"><i class="acro-facebook-logo"></i></a></li>
                    <li><a href="#"><i class="acro-twitter"></i></a></li>
                    <li><a href="#"><i class="acro-behance-logo"></i></a></li>
                  </ul>

                </div>
              </li>
              @endforeach
            </ul>

                {{ $posts->render() }}
          </section>

        </div>
      </div>
    </section>
            </div>
        </div>
    </section>


@endsection

@section('footer')


@endsection
