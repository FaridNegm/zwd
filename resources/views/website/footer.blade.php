<footer>
    <div class="container">
        <section>
            <div class="footer-col">
                <div class="header">
                    <h5 class="aos-init" data-aos="fade-down" data-aos-duration="1200">About acro</h5>
                </div>
                <div class="ftr-abt aos-init" data-aos="fade-left" data-aos-duration="900">
                    <ul class="ftr-nav">
                        <li><a href="{{url('about')}}">About us</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="{{url('projects')}}">Projects</a></li>
                        <li><a href="{{url('team')}}">Team</a></li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-col">
                <div class="header">
                    <h5 class="aos-init" data-aos="fade-down" data-aos-duration="900">Latest Posts</h5>
                </div>
                <div class="tweets">
                    <ul>
                        @foreach(App\post::take(3)->get() as $post)
                            <li class="aos-init" data-aos="fade-left" data-aos-duration="900" >
                                <a style="cursor: pointer;">
                                    <i class="acro-twitter"></i>
                                    <p>{{str_limit($post->body , 100)}}</p>
                                    <span>{{$post->created_at->diffForHumans()}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="footer-col">
                <div class="header">
                    <h5 class="aos-init" data-aos="fade-down" data-aos-duration="1800">Find us</h5>
                </div>
                <!-- map -->
                <div id="map-canvas"></div>
            </div>
        </section>
    </div>

    <div class="copyright-sec">
        <div class="container">
            <div class="cpy-row">
                <div class="footer-logo" style="margin: 0px auto;display: block;">
                    <a href="{{url('https://www.facebook.com/profile.php?id=100001882042679')}}" style="color: #cccc52;font-size: 13px;">&copy; {{date('Y')}} - By Farid Negm </a>
                </div>
            </div>
        </div>
    </div>
</footer>

