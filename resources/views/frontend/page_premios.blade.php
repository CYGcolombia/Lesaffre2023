@extends('frontend.layout.index')

@section('content')
        
<!-- Main Wrapper Start -->
<div class="wrapper">
    <div class="single-slide d-flex align-items-center bg-image" data-bg-image="assets/img/premios/beach-product-background.png" style=" background-position: top !important; margin-top: 0% !important;">                    
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper" style="margin-top: 14vh;">
                <center>
                    <img src="{{ asset('assets/img/premios/premios_new.png') }}" alt="Premios" style="margin-bottom: 10vh;">
                </center>
                <div class="row justify-content-center" style="background-color: white !important; z-index: 1000 !important; margin-top: -11vh;">
                    <div class="col-lg-9">
                        <article class="mb-md--55 pb-md--55">                                        
                            <div class="single-post__info">
                                <div class="row mb--20 mb-md-33 mt-5">
                                    <div class="col-lg-12 col-md-12 ml-5 mr-5">
                                        <p align="justify" style="font-size: 15px !important;">
                                        La acción “Vende, Crece, Viaje” 2023 premiará al distribuidor que alcance la mejor posición en el concurso con un increíble viaje. También se entregarán premios a los mejores vendedores de cada mes y del cuatrimestre. Todos los meses habrá capacitaciones que permitan conocer más a fondo los productos destacados del mes para ayudar a impulsarlos y compartir un espacio de encuentro entre todos. Se consideran las compras de distribuidores realizadas entre el 1° de julio de 2023 y el 31 de octubre de 2023. La registración para participar, previa aceptación de las bases y condiciones aplicables a la acción deberá realizarse en: [completar con el link correspondiente, según el grupo]. Del 1 al 15 del mes de agosto, septiembre, octubre y noviembre de 2023, se comunicará el ranking de los distribuidores y los ganadores de los premios mensuales. Dentro de los treinta (30) días corridos contados desde la finalización del plazo de vigencia de la acción, se comunicarán los ganadores de los premios finales. Para más información consulte bases en [completar con el link correspondiente, según el grupo.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
        </main>
    </div>
</div>
@endsection