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
                            data-bg-image="assets/img/slider/back_full2023.png">
                            <div class="container">
                                <div class="row align-items-center no-gutters w-100 mt-5">
                                    <div class="col-lg-12 col-md-12" style="margin-left: 28% !important">
                                        <figure class="slider-image d-none d-md-block">
                                            <img src="{{ asset('assets/img/slider/logo-2023-03.png')}}" alt="Slider Image" style="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutters w-100  mt-5">
                                    <div class="col-lg-12 offset-lg-5 col-md-12">
                                        <div class="slider-content__btn">
                                            <a href="{{ URL::to('loginview') }}" class="css-button" style="background: #232E84 !important;" data-animation="fadeInUp">EMPEZÁ</a>
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
                                {{--  <a href="{{ URL::to('aprende') }}" >
                                    <img src="{{ asset('assets/img/brand/ico 5.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">APRENDE</div>
                                </a>  --}}
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