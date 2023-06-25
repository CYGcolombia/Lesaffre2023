@extends('frontend.layout.index')

@section('content')
<div class="wrapper">
    <div class="single-slide d-flex align-items-center bg-image" data-bg-image="assets/img/premios/beach-product-background.jpg" style="background-position: bottom !important; margin-top: 1% !important;">                    
        <main class="main-content-wrapper">
            
            <div class="row justify-content-center espacio-menu">
                <div class="col-lg-9">
                    <div class="row align-items-center no-gutters w-100">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-content">
                                <div class="slider-content__text md-lg--80 mb-md--40 mb-sm--15" style="margin-bottom:5%;">
                                    <p class="text-uppercase font-weight-light" style="text-align: justify;">
                                        Asiste a los cuatro (4) meetings especiales que el Organizador dictará vía Zoom durante el Plazo de Vigencia bajo la dirección del reconocido pastelero Juan Manuel Herrera. 
                                        El cumplimiento de este requisito le otorgará veinticinco (25) puntos adicionales al Participante por su asistencia a cada meeting.
                                    </p>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 offset-lg-2 col-md-4" style="padding-bottom: 10%;">
                                <figure class="slider-image d-none d-md-block">
                                    <img src="{{ asset('assets/img/brand/ico 5.png')}}" style="max-width:65%;width:auto;height:auto;">
                                </figure>
                            </div>
                    </div>
                </div>                    
            </div>
        </main>
    </div>
</div>
@endsection