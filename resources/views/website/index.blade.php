@extends('website.app')

@section('title')
    ZWD Agency
@endsection

@section('header')
    <style>
        .about-us{
            padding: 100px 0px 0px;
            margin-bottom: -80px;
        }
        .about_us_image {
            text-align: center;
            position: relative;
            top: -100px;
            max-width: 500px;
            margin: 0px auto;
        }
    </style>
@endsection

@section('content')

    <!-- banner -->
    <div class="banner-box">
        <div class="sm-banner">
            <img src="{{url('website')}}/images/banner.jpg" alt="banner-home" />
        </div>

        <div id="slider" style="width:1280px;height:700px;max-width:1920px;margin:0 auto;margin-bottom: 0px; background-color: #48b1c3; padding-top: 120px; padding-bottom: 60px;">

            <!-- Slide 2-->
            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:5; kenburnsscale:1.2; parallaxtype:3d; parallaxdistance:10; parallaxrotate:5;">

                <img width="680" height="680" src="{{url('website')}}/images/shadow.png" class="ls-l" alt="" style="top:5px; left:390px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:1;">

                <!-- border -->
                <img width="300" height="300" src="{{url('website')}}/images/dash-border2.png" class="ls-l" alt="" style="top:75px; left:145px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:-1;">

                <!-- circle1 -->
                <img width="300" height="300" src="{{url('website')}}/images/circle1.png" class="ls-l" alt="" style="top:60px; left:200px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:-3;">

                <!-- border -->
                <img width="510" height="510" src="{{url('website')}}/images/dash-border1.png" class="ls-l" alt="" style="top:70px; left:390px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:-1;">

                <!-- border -->
                <img width="500" height="500" src="{{url('website')}}/images/circle2.png" class="ls-l" alt="" style="top:55px; left:420px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:-2;">

                <!-- circle2 -->
                <img width="510" height="510" src="{{url('website')}}/images/dash-border1.png" class="ls-l" alt="" style="top:30px; left:440px;" data-ls="offsetxin:-60; durationin:1400; delayin:100; easingin:easeOutExpo; offsetxout:60; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:-1;">

                <!-- girl image -->
                <img width="700" height="660" src="{{url('website')}}/images/item1.png" class="ls-l" alt="" style="top:35px; left:150px;" data-ls="offsetxin:150; durationin:1500; easingin:easeOutExpo; offsetxout:-150; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:2;">

                <!-- circle3 -->
                <img width="300" height="300" src="{{url('website')}}/images/circle3.png" class="ls-l ben-txt-back" alt="" style="top:270px; left:720px;" data-ls="offsetxin:350; durationin:1500; easingin:easeOutExpo; offsetxout:-350; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:7;">

                <div class="ls-l ben-txt" style="top:250px; left:740px;" data-ls="offsetxin:350; durationin:1500; easingin:easeOutExpo; offsetxout:-350; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:7;">
                    <h1>ZWD</h1>
                    <strong>Everything</strong>
                    <span>About Business Solutions</span>
                </div>

                <div class="ls-l bensub-txt" style="top:420px; left:300px;" data-ls="offsetxin:350; durationin:1500; easingin:easeOutExpo; offsetxout:-350; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:7;">
                    <span>Seo Specialist</span>

                </div>

                <div class="ls-l bensub-txt1" style="top:80px; left:640px;" data-ls="offsetxin:350; durationin:1500; easingin:easeOutExpo; offsetxout:-350; durationout:500; easingout:easeInExpo; parallax:true; parallaxlevel:7;">
                    <span>Digital Marketing</span>

                </div>
            </div>

        </div>
    </div>

    <!-- About Us -->
    <section>
        <div class="container">
            <div class="about-us">
                <section>
                    <h2 class="aos-init" data-aos="fade-right" data-aos-duration="500"> About us</h2>
                    <div class="abt-dtls aos-init" data-aos="fade-right" data-aos-duration="500">
                        <p>Suspendisse commodo orci tellus, sed blandit est egestas in. Proin sed mi iaculis, auctor mi eleifend, porttitor elit. Curabitur eget euismod neque, eu gravida nibh. In consequat accumsan </p>
                        <p>aliquam. Nulla facilisi. Phasellus rutrum, metus non rutrum ullamcorper, est tellus congue felis, posuere, semper libero vitae, rutrum lorem.</p>

                        <a class="btn-effect btn-km aos-init" data-aos="fade-up" data-aos-duration="2500" href="{{ url('about') }}">know more</a>

                        <div class="swp-box">
                            <h3>Services we Provide</h3>
                            <ul class="gym-list">
                                @foreach ($services_about as $service)
                                    <li class="aos-init" data-aos="fade-up" data-aos-duration="1300">
                                        <a href="{{ url('single_service/'.$service->title) }}">
                                            <span>
                                            <img src="{{url('admin/images/services/'.$service->image)}}" alt="icon" class="img-responsive" style="border-radius:50%;width:50px;height:50px;"/>
                                            </span>
                                            {{ $service->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
                <figure>
                    <img class="aos-init" data-aos="zoom-in" data-aos-duration="900" src="{{url('website')}}/images/welcome-img.png" alt="welcome-img" />
                </figure>
            </div>
        </div>
    </section>

    <!-- 2 services section | creation -->
    <section class="creation-sec" style="margin-top:80px;">

        <ul class="altr-box">
            <li>
                <div class="container">
                    <div class="left">
                        <h2 class="aos-init" data-aos="fade-right" data-aos-duration="1000">WHO ARE WE</h2>
                        <div class="aos-init" data-aos="fade-right" data-aos-duration="1500">
                            <p>Mauris viverra nisl fringilla convallis semper. Mauris dapibus sapien non congue tempus. Pellentesque habitant morbi s et malesuada fames ac turpis egestas. Nam accumsan neque quis fermentum ultricies. </p>
                            <p>Cras ut purus ac ligula tristique suscipit. Quisque volutpat, leo vitae mattis lacinia, orci nulla ultricies quam</p>
                        </div>
                        <a class="btn-effect btn-km btn-white aos-init" data-aos="fade-up" data-aos-duration="2500" href="{{ url('services') }}">know more</a>
                    </div>
                    <div class="right">
                        <figure>
                            <img src="{{url('website')}}/images/thumbnail1.jpg" alt="img" />
                        </figure>
                    </div>
                </div>
            </li>
            <li>
                <div class="container">
                    <div class="left">
                        <h2 class="aos-init" data-aos="fade-right" data-aos-duration="1000">WHY ZWD</h2>
                        <div class="aos-init" data-aos="fade-right" data-aos-duration="1500">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac sodales nibh, at aliquam diam. Etiam hendrerit est et risus pretium ornare. Nunc ac tincidunt</p>
                            <p>conubia nostra, per inceptos himenaeos. tellus. Mauris molestie, nisl ut porta porttitor, eros quam semper lacus.</p>
                        </div>
                        <a class="btn-effect btn-km btn-white aos-init" data-aos="fade-up" data-aos-duration="2500" href="{{ url('services') }}">know more</a>
                    </div>
                    <div class="right">
                        <figure>
                            <img src="{{url('website')}}/images/thumbnail2.jpg" alt="img" />
                        </figure>
                    </div>
                </div>
            </li>
        </ul>
    </section>


    <!-- subscribe Section -->
    <section id="sebscribe-row">
        <div class="container">
            <div class="sebscribe-box aos-init" data-aos="zoom-in-up" data-aos-duration="1500">
                <h2>Subscribe a Newsletter</h2>
                <span>Subscribe to our Newsletter&#38; stay updated</span>
                <form>
                    <input placeholder="Enter your Email" class="input-subscribe" type="text" required="">
                    <button type="submit" class="btn-effect btn-km btn-submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- provided service Section -->
    <section>
        <div class="container">
            <div class="provided-srvs">
                <header class="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> provided services</h2>
                    <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                        <p>Praesent a leo vel enim ullamcorper malesuada. Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas. </p>
                    </div>
                </header>

                <div class="provided-srvs-dtls">
                    <div class="left">
                        @foreach($services as $service)
                            <article class="">
                                <div>
                                    <div>
                                        <img src="{{url('admin/images/services/'.$service->image)}}" class="img-responsive" style="width: 60px;height: 60px;border-radius: 50%;"/>
                                        <span class="aos-init" data-aos="fade-left" data-aos-duration="1000" style="font-weight: bold;font-size: 22px;position: relative;top: -25px; left: 10px;">{{$service->title}}</span>
                                    </div>
                                    <hr style="width: 90%;margin: 15px auto 20px" />
                                    <div class="aos-init" data-aos="fade-left" data-aos-duration="1500">
                                        <p style="height: 160px;">{{str_limit($service->body , 200)}}</p>
                                        <a class="btn-effect btn-km aos-init" data-aos="fade-up" data-aos-duration="2500" href="{{ url('single_service/'.$service->title) }}">read more</a>
                                        <br><br>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section | coaches-->
    <section class="team-sec">
        <div class="container">
            <div class="team">
                <header class="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> Team Members </h2>
                    <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                        <p>Fusce eget magna id nibh suscipit elementum. Praesent at leo auctor, eleifend ipsum at, ultricies nisi. Aliquam erat volutpat.</p>
                    </div>
                </header>
                <div class="clearfix team-wraper">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach($users as $user)
                            <div class="item">
                                <div class="tm-box ">
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
                            </div>
                        @endforeach
                        <!-- end item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="clearfix">
        <div class="container">
            <div class="gallery">
                <header class="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> ZWD Projects </h2>
                    <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                        <p>Aliquam convallis neque quis pretium viverra. Proin maximus libero ac porttitor fermentum. Donec aliquet dui sed ultricies semper. Praesent ac blandit dolor. Etiam id posuere ex.</p>
                    </div>
                </header>

                <div class="gallery-box">
                    <div class="grid-uploads">
                        <div class="well clearfix">
                            <div class="btn-group filters-button-group">
                                <!-- <button type="button" class="btn btn-sort" data-filter="*"> All</button> -->
                                <button type="button" class="btn btn-sort" data-filter=".Marketing">
                                    <span>Digital Marketing</span>
                                </button>
                                <button type="button" class="btn btn-sort" data-filter=".Design">
                                    <span>Creative Design</span>
                                </button>
                                <button type="button" class="btn btn-sort" data-filter=".Photography">
                                    <span>Photography</span>
                                </button>
                                <br />
                                <button type="button" class="btn btn-sort" data-filter=".Campaign">
                                    <span>Social Campaign</span>
                                </button>
                                <button type="button" class="btn btn-sort" data-filter=".Printing">
                                    <span>Printing</span>
                                </button>
                            </div><!-- /.btn-group -->
                        </div><!-- /.well -->

                        <div class="uploads-row">
                            @foreach($posts as $post)
                                <div class="col-media box-height1 {{$post->category}}">
                                    <div class="thumbnail">

                                        <div class="col-media-item col-media-icon">
                                            <img class="aos-init example-image" src="{{url('admin/images/posts/'.$post->image)}}" alt="gallery image" style="height: 280px;"/>

                                            <div class="overlay right">
                                                <a class="view" href="{{url('admin/images/posts/'.$post->image)}}" data-lightbox="gallery-image" data-title="{{$post->title}}">
                                                    <img src="{{url('website')}}/images/view.png" alt="img" />
                                                </a>
                                                <div class="text">
                                                    {{$post->title}}
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div><!-- /.uploads-row -->

                    </div><!-- /.grid-uploads -->

                    <div class="text-center">
                        <a class="btn-effect btn-km aos-init" data-aos="fade-up" data-aos-duration="2500" href="{{ url('services') }}" style="font-size: 14px;font-weight: bold;margin: 80px auto -30px;">
                        All Projects
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Product -->

    <section class="product-sec clearfix">
        <div class="container">
            <div class="product">
                <header class="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000">ZWD Price List</h2>
                    <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                        <p>Pellentesque eget elit justo. Quisque a quam elementum, dictum felis non, dignissim nunc. Suspendisse vitae condimentum tellus. Sed a metus </p>
                    </div>
                </header>
                <div id="owl-demo1" class="owl-carousel owl-theme">

                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item1.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item2.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item3.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item4.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item1.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item2.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item3.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item4.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item1.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item2.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item3.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <figure>
                                <img src="{{url('website')}}/images/cart-item4.png" alt="img" />
                            </figure>
                            <div class="item-dtls">
                                <div class="left">
                                    <strong> Gymnastics Mat </strong>
                                    <span>$ 69.00 </span>
                                </div>
                                <div class="right">
                                    <a href="shop-details.html" class="cart-item">
                                        <i class="acro-online-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact area -->
    <section class="contact-area">
        <div class="container">
            <div class="contact-row">
                <div class="contacts">
                    <header class="header">
                        <h2 class="aos-init" data-aos="fade-down" data-aos-duration="1500"> get in touch  </h2>
                        <div class="aos-init" data-aos="fade-down" data-aos-duration="1500">
                            <p>Pellentesque eget elit justo. Quisque a quam elementum,  <br /> dictum felis non,
                                dignissim nunc. Suspendi </p>
                        </div>
                    </header>

                    @foreach($contacts as $contact)
                        <ul>
                            <li class="aos-init" data-aos="fade-left" data-aos-duration="1200">
                                <span>Contact us</span>
                                <a href="tel:04465896531">{{$contact->phones}}</a>
                            </li>

                            <li class="aos-init" data-aos="fade-left" data-aos-duration="1500">
                                <span>mail us</span>
                                <a href="mailto:www.studiotheme.com">{{$contact->email}}</a>
                            </li>

                            <li class="aos-init" data-aos="fade-left" data-aos-duration="1000">
                                <span>Address</span>
                                <a>{{$contact->address}}</a>
                            </li>
                        </ul>

                        <div class="social">
                            <h4>follow us on</h4>
                            <ul>
                                <li class="aos-init" data-aos="fade-left" data-aos-duration="1500">
                                    <a href="{{$contact->facebook}}" target="_blank"><i class="acro-dribbble-logo"></i></a>
                                </li>
                                <li class="aos-init" data-aos="fade-left" data-aos-duration="900">
                                    <a href="{{$contact->facebook}}/ target="_blank"><i class="acro-facebook-logo"></i></a>
                                </li>
                                <li class="aos-init" data-aos="fade-left" data-aos-duration="1300">
                                    <a href="{{$contact->facebook}}" target="_blank"><i class="acro-twitter"></i></a>
                                </li>
                                <li class="aos-init" data-aos="fade-left" data-aos-duration="2200">
                                    <a href="{{$contact->facebook}}" target="_blank"><i class="acro-behance-logo"></i></a>
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>
                <div class="contact-form">
                    <form method="post" action="{{url('admin-panel/send_message')}}">
                        <input placeholder="Name &nbsp;&nbsp;|" class="input-subscribe aos-init" type="text" required="" data-aos="fade-down" data-aos-duration="1200" name="name">
                        <input placeholder="Email &nbsp;&nbsp;|" class="input-subscribe aos-init" type="text" required="" data-aos="fade-down" data-aos-duration="1200" name="email">
                        <input placeholder="Subject &nbsp;&nbsp;|" class="input-subscribe aos-init" type="text" required="" data-aos="fade-down" data-aos-duration="1200" name="subject">
                        <textarea placeholder="Message &nbsp;&nbsp;|" class="input-subscribe aos-init" type="text" required="" data-aos="fade-down" data-aos-duration="1200" name="message" rows="5"></textarea>

                        <div style="margin: 0px auto;"><button type="submit" class="btn-effect btn-submit2">Send</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

@endsection

@section('footer')
    {{--footer--}}
@endsection
