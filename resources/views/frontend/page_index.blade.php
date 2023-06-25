@extends('frontend.layout.index')

@section('content')
<!-- Slider area Start -->
    <main class="main-content-wrapper">
            <section class="homepage-slider mb--11pt5" >
                <div class="element-carousel slick-right-bottom" data-slick-options='{
                    "slidesToShow": 1, 
                    "dots": true
                }'>
                    <div class="item">
                        <div class="single-slide d-flex align-items-center bg-image"
                            data-bg-image="assets/img/slider/back_full2022.png">
                            <div class="container">
                                <div class="row align-items-center no-gutters w-100">
                                    <div class="col-lg-4  offset-lg-1 col-md-8">
                                        <figure class="slider-image d-none d-md-block">
                                            <img src="{{ asset('assets/img/slider/logo_slider2022.png')}}" alt="Slider Image">
                                        </figure>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1 col-md-5">
                                        <div class="slider-content">
                                            <div class="slider-content__text mb--95 md-lg--80 mb-md--40 mb-sm--15">
                                                <h3 class="font-weight-light" data-animation="fadeInUp" style="color: #DB1F26 !important; font-size:6rem"
                                                    data-duration=".3s" data-delay=".3s"><b>Este año <br> Lesaffre te lleva <br> a Francia</b></h3>
                                            </div>
                                            <div class="slider-content__btn">
                                                <a href="{{ URL::to('loginview') }}" class="css-button" style="background: #232E84 !important;" data-animation="fadeInUp">EMPEZÁ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider area End -->
            
            <!-- 3 box area Start -->
            <section class="method-area mb--11pt5">
                <div class="container">                    
                <div class="row" >
                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('objetivos') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 1.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">OBJETIVOS</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('productos') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 2.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">PRODUCTOS</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('premios') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 3.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">PREMIOS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('receta') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 4.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">RECETA</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('aprende') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 5.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">APRENDE</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('tiempos') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 6.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">TIEMPOS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3 box area End -->
</main>
@endsection