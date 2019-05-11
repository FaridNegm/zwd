@extends('website.app')

@section('title')
    Blog
@endsection

@section('header')
    <style>
        .lista-item {
            background: white;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 10px;
            box-shadow: 0 2px 6px rgba(50,50,90,.1);
        }

        .faq-titulo {
            cursor: pointer;
            padding: 10px;
            font-size: 17px;
            font-family: monospace;
            color: #279ee6;
        }

        .faq-titulo::before {
            content: '';
            display: inline-block;
            height: 12px;
            width: 24px;
            margin-right: 10px;
            background: #BEB0F4;
        }

        .faq-titulo::after {
            content: '+';
            float: right;
            transition: transform .3s ease;
        }

        .faq-conteudo {
            padding: 10px;
            color: #6B7C93;
            font-family: Helvetica;
            font-size: .875em;
            line-height: 1.4em;
            display: none;
        }

        .trigger-input {
            display: none;
        }

        .trigger-input:checked + .trigger-wrapper .faq-conteudo {
            display: block;
        }

        .trigger-input:checked + .trigger-wrapper .faq-titulo::after {
            transform: rotate(45deg) scale(1.08);
        }

    </style>
@endsection

@section('content')

    <!-- banner -->
    <section>
        <div class="inner-banner blog-banner">
            <img src="images/banner-blog.jpg" alt="banner-image" />
            <div class="container">
                <div class="caption">
                    <h1>blog</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- blog  -->
    <section class="blogsection">
        <div class="container">
            <div class="blog-row">

                <header id="header">
                    <h2 class="aos-init" data-aos="fade-left" data-aos-duration="1000"> blog details</h2>
                    <div class="aos-init" data-aos="fade-up" data-aos-duration="1500">
                        <p>Maecenas quis auctor velit, ac volutpat mi. Mauris at tincidunt tellus. Praesent augue tortor </p>
                    </div>
                </header>

                <section>
                    <ul class="blog-list">
                        <li>

                            <div class="blog-thumbnail">
                                <img src="images/blog-img1.jpg" alt="blog" />
                            </div>

                            <div class="blog-details">

                                <h3>Maecenas molestie vehicula</h3>

                                <div class="adc">
                                    <span class="author">John Smith</span>
                                    <span class="date">03 February</span>
                                    <span class="comment">0 Comments</span>
                                </div></div></li></ul></section>

                <div class="lista-item">
                    <input class="trigger-input" id="faq-titulo-1" type="checkbox">
                    <div class="trigger-wrapper">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="font-bold"> How can i purchase my admin + </a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                            </div>
                        </div>
                        <br>
                        <select class="form-control">
                            <option>Excellent</option>
                            <option>Very Good</option>
                            <option>Good</option>
                            <option>Bad</option>
                        </select>
                    </div>
                </div>

                <a class="btn-effect btn-more2">Submit</a>

                <ul class="blog-social">
                    <li><a href="#"><i class="acro-facebook-logo"></i></a></li>
                    <li><a href="#"><i class="acro-twitter"></i></a></li>
                    <li><a href="#"><i class="acro-behance-logo"></i></a></li>
                </ul>

            </div>
            </li>

            <li>

                <div class="blog-thumbnail">
                    <img src="images/blog-img1.jpg" alt="blog" />
                </div>

                <div class="blog-details">

                    <h3>Maecenas molestie vehicula</h3>

                    <div class="adc">
                        <span class="author">John Smith</span>
                        <span class="date">03 February</span>
                        <span class="comment">0 Comments</span>
                    </div>

                    <div class="lista-item">
                        <input class="trigger-input" id="faq-titulo-1" type="checkbox">
                        <div class="trigger-wrapper">
                            <label for="faq-titulo-1">
                                <h2 class="faq-titulo">What About Remas Land Cheese?</h2>
                            </label>
                            <p class="faq-conteudo">Todos os cursos possuem certificado de conclusão. Ao completar todas as aulas um certificado é gerado no seu nome. Certificado válido em todo o Brasil com base na lei do Curso Livre.</p>
                            <b color="red"> Rate: </b>
                            <input type="radio" name="rate" value="male" bgcolor="red"> Excellent
                            <input type="radio" name="rate" value="female"> Very Good
                            <input type="radio" name="rate" value="male"> Good
                            <input type="radio" name="rate" value="female"> Bad
                        </div>
                    </div>

                    <a class="btn-effect btn-more2">Submit</a>

                    <ul class="blog-social">
                        <li><a href="#"><i class="acro-facebook-logo"></i></a></li>
                        <li><a href="#"><i class="acro-twitter"></i></a></li>
                        <li><a href="#"><i class="acro-behance-logo"></i></a></li>
                    </ul>

                </div>
            </li>

            <li>

                <div class="blog-thumbnail">
                    <img src="images/blog-img1.jpg" alt="blog" />
                </div>

                <div class="blog-details">

                    <h3>Maecenas molestie vehicula</h3>

                    <div class="adc">
                        <span class="author">John Smith</span>
                        <span class="date">03 February</span>
                        <span class="comment">0 Comments</span>
                    </div>

                    <div class="lista-item">
                        <input class="trigger-input" id="faq-titulo-1" type="checkbox">
                        <div class="trigger-wrapper">
                            <label for="faq-titulo-1">
                                <h2 class="faq-titulo">What About Remas Land Cheese?</h2>
                            </label>
                            <p class="faq-conteudo">Todos os cursos possuem certificado de conclusão. Ao completar todas as aulas um certificado é gerado no seu nome. Certificado válido em todo o Brasil com base na lei do Curso Livre.</p>
                            <b color="red"> Rate: </b>
                            <input type="radio" name="rate" value="male" bgcolor="red"> Excellent
                            <input type="radio" name="rate" value="female"> Very Good
                            <input type="radio" name="rate" value="male"> Good
                            <input type="radio" name="rate" value="female"> Bad
                        </div>
                    </div>

                    <a class="btn-effect btn-more2">Submit</a>

                    <ul class="blog-social">
                        <li><a href="#"><i class="acro-facebook-logo"></i></a></li>
                        <li><a href="#"><i class="acro-twitter"></i></a></li>
                        <li><a href="#"><i class="acro-behance-logo"></i></a></li>
                    </ul>

                </div>
            </li>


        </div>
        </li>
        </ul>

        <ul class="pagi">
            <li class="pre"><a href="#"> < </a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="nxt"><a href="#"> > </a></li>
        </ul>
    </section>

    </div>
    </div>
    </section>
    
@endsection

@section('footer')
    {{--footer--}}
@endsection
