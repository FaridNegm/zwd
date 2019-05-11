@extends('website.app')

@section('title')
    Contact Us
@endsection

@section('header')
    {{--header--}}
@endsection

@section('content')

    <!-- banner -->
    <section>
        <div class="inner-banner contact">
            <img src="{{url('website')}}/images/banner-contact.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>contact us.</h1>
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

@endsection

@section('footer')
    {{--footer--}}
@endsection
