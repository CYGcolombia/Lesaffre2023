@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center espacio-menu">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Listado Puntuaciones</div>

                <div class="card-body">
                   <listado-puntuaciones></listado-puntuaciones>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection