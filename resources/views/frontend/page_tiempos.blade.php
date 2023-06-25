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
                                <div class="slider-content__text md-lg--80 mb-md--40 mb-sm--15" style="margin-bottom:10%;">
                                    <p class="text-uppercase font-weight-light" style="text-align: justify; font-weight: 500 !important; font-size: 15px !important;">
                                        El Desafío Lesaffre 2022 considera todas las compras de distribuidores realizadas entre el 1 de Julio al 30 de Octubre de 2022.<br><br>
                                        La registración y aceptación de las bases de participación deberá realizarse en: www.lesaffreplay.com/DesafioLesaffre2022 antes del día 1 de Julio a las 17:00 horas.<br><br> 
                                        Al inicio de cada mes de concurso se comunicará a cada participante las cuotas de dicho periodo.<br><br> 
                                        10 días después de finalizado cada mes se comunicará el ranking de los distribuidores y los ganadores de los premios mensuales.<br><br>
                                        Del 1 al 10 de Noviembre se comunicará el ganador del viaje y del premio para el mejor vendedor del cuatrimestre.
                                    </p>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 offset-lg-2 col-md-4">
                                <figure class="slider-image d-none d-md-block">
                                    <img src="{{ asset('assets/img/brand/ico 6.png')}}" style="max-width:65%;width:auto;height:auto;">
                                </figure>
                            </div>
                    </div>
                </div>                    
            </div>
        </main>
    </div>
</div>
@endsection