@extends('layouts.homeMenu')

@section('content')

<div class="row">

<h3>BIENVENIDO A LA SECCIÓN DE ORDENES</h3>

<!-- Boton para regresar -->
<a href="{{url('homeMenu')}}">
            <img class="img-atras" src="{{ asset('imagenes/atras.png') }}">
</a>


    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa1.jpg') }}" alt="SECCION DE ORDENES" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 1</h5>
                <p class="card-text">Mesa 1 para clientes :D</p>
                <a href="{{ route('orden.crear') }}" class="btn btn-primary">Dar mesa 1 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa2.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 2</h5>
                <p class="card-text">Mesa 2 para clientes :D</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 2 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa3.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 3</h5>
                <p class="card-text">Mesa 3 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 3 :D</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa4.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 4</h5>
                <p class="card-text">Mesa 4 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 4 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa5.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 5</h5>
                <p class="card-text">Mesa 5 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 5 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa6.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 6</h5>
                <p class="card-text">Mesa 6 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 6 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa7.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 7</h5>
                <p class="card-text">Mesa 7 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 7 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/mesa8.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">MESA 8</h5>
                <p class="card-text">Mesa 8 para clientes.</p>
                <a href="{{url('')}}" class="btn btn-primary">Dar mesa 8 :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/llevar.jpg') }}" alt="SECCION DE MESAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">PARA LLEVAR</h5>
                <p class="card-text">Sección de pedidos para llevar.</p>
                <a href="{{url('')}}" class="btn btn-primary">Ir a pedidos :D</a>
            </div>
        </div>
    </div>

@endsection
