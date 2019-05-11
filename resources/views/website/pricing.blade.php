@extends('website.app')

@section('title')
    Pricing
@endsection

@section('header')
    {{--header--}}
@endsection

@section('content')

    <!-- banner -->
    <section class="inner-banner shop-banner">
        <div>
            <img src="{{url('website')}}/images/banner-shop.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>shop</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- shop-wraper  -->
    <section class="shop-wraper">
        <div class="container">

            <header id="header">
                <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> our Shop </h2>
            </header>

            <ul class="breadcrumb1">
                <li class="aos-init" data-aos="fade-right" data-aos-duration="1200">
                    <a href="index-2.html">home</a>
                </li>
                <li class="aos-init" data-aos="fade-right" data-aos-duration="2000">shop</li>
            </ul>

            <div class="top-bar">
                <span class="short-msg aos-init" data-aos="fade-up" data-aos-duration="1500">Shoping 1 - 12 Products</span>
            </div>

            <div class="shop-wraper-box">
                <!-- event-area | left column 8 -->
                <div class="shop-area">
                    <!-- top-bar -->

                    <div class="item-wraper">
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item7.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong>Trouser </strong>
                                        <span>$ 199.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1900">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item8.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Gymnastic Suit</strong>
                                        <span>$ 49.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item9.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Dress </strong>
                                        <span>$ 299.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item10.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Gymnastic Ring</strong>
                                        <span>$ 99.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>

                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1900">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item11.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Acrobatics Dress </strong>
                                        <span>$ 149.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item12.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Book  </strong>
                                        <span>$ 64.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item13.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong> Shoe </strong>
                                        <span>$ 149.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1900">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item14.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong>Woman Hoods</strong>
                                        <span>$ 49.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="shop-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                            <figure>
                                <a href="shop-details.html"><img src="{{url('website')}}/images/cart-item15.jpg" alt="img" /></a>
                                <div class="item-dtls">
                                    <div class="left">
                                        <strong>Gymnastic Shoe</strong>
                                        <span>$ 249.00 </span>
                                    </div>
                                    <div class="right">
                                        <a href="shop-details.html" class="cart-item">
                                            <i class="acro-online-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <ul class="pagi">
                        <li class="pre"><a href="#"> < </a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="nxt"><a href="#"> > </a></li>
                    </ul>

                </div>
                <!-- sidebar -->
                <div class="sidebar shop-sidebar">
                    <!-- keyword-search -->
                    <div class="key-search shop-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                        <h3>Search</h3>
                        <input placeholder="Keyword " class="input-search2" type="text" required="">
                    </div>
                    <!-- price filter -->
                    <div class="price-filter">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1500">price filter</h3>
                        <!-- <hr /> -->
                        <form>
                            <div class="range-slider">
                                <!-- <span>
                                  from <input type="number" value="500" min="0" max="10000"/>
                                  to <input type="number" value="2000" min="0" max="10000"/>
                                </span> -->
                                <input value="500" min="0" max="10000" step="500" type="range"/>
                                <input value="2000" min="0" max="10000" step="500" type="range"/>
                                <!-- <svg width="100%" height="24">
                                  <line x1="4" y1="0" x2="300" y2="0" stroke="#ddd" stroke-width="12" stroke-dasharray="1 28"></line>
                                </svg> -->
                            </div>
                            <button type="submit" class="btn-effect btn-submit2 btn-fltr">filter</button>
                        </form>

                    </div>

                    <!-- category -->
                    <div class="category-box">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1200">category</h3>
                        <div class="styled-select aos-init" data-aos="fade-up" data-aos-duration="1200">
                            <select>
                                <option>Catagorey</option>
                                <option>Catagorey 1</option>
                                <option>Catagorey 2</option>
                                <option>Catagorey 3</option>
                            </select>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>

                    <!-- Product List -->
                    <div class="product-list">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1200">Product List</h3>
                        <hr />
                        <div class="radios">
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-1'>
                                    <input checked='checked' id='radio-button-1' name='radio-button' type='radio' value='one'>
                                    Clothing
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-2'>
                                    <input id='radio-button-2' name='radio-button' type='radio' value='three'>
                                    Gym Products
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-3'>
                                    <input id='radio-button-3' name='radio-button' type='radio' value='three'>
                                    shoes
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-3a'>
                                    <input id='radio-button-3a' name='radio-button' type='radio' value='three'>
                                    books
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Discount -->
                    <div class="product-list">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1200">discounts</h3>
                        <hr />
                        <div class="radios">
                            <!-- radio  -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-4'>
                                    <input checked='checked' id='radio-button-4' name='radio-button' type='radio' value='one'>
                                    50% Discount
                                </label>
                            </div>
                            <!-- radio  -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-5'>
                                    <input id='radio-button-5' name='radio-button' type='radio' value='three'>
                                    40% Discount
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-9'>
                                    <input id='radio-button-9' name='radio-button' type='radio' value='three'>
                                    35% Discount
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-9a'>
                                    <input id='radio-button-9a' name='radio-button' type='radio' value='three'>
                                    flat Discount
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Color -->
                    <div class="color-list">
                        <h3 class="aos-init" data-aos="fade-up" data-aos-duration="1200">Color</h3>
                        <hr />
                        <div class="radios">
                            <!-- radio  -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-7'>
                                    <input checked='checked' id='radio-button-7' name='radio-button' type='radio' value='one'>

                                </label>
                            </div>
                            <!-- radio  -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-8'>
                                    <input id='radio-button-8' name='radio-button' type='radio' value='three'>

                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-8a'>
                                    <input id='radio-button-8a' name='radio-button' type='radio' value='three'>
                                </label>
                            </div>
                            <!-- radio   -->
                            <div class="aos-init" data-aos="fade-up" data-aos-duration="1200">
                                <label for='radio-button-10'>
                                    <input id='radio-button-10' name='radio-button' type='radio' value='three'>
                                </label>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('footer')
    {{--footer--}}
@endsection
