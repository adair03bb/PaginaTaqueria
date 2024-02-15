@extends('layouts.homeMenu')

@section('content')

<div class="row">

<h3>BIENVENIDO AL MENU DE ADMINSTRACIÓN</h3>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/insumos.jpg') }}" alt="SECCION DE INSUMOS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCION DE INSUMOS</h5>
                <p class="card-text">Adminstra tus insumos :D</p>
                <a href="{{url('home')}}" class="btn btn-primary">Ir a insumos</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/productos.jpg') }}" alt="SECCION DE PRODUCTOS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCION DE PRODUCTOS</h5>
                <p class="card-text">Administra tus productos :D</p>
                <a href="{{url('homeProductos')}}" class="btn btn-primary">Ir a productos</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/categorias.jpg') }}" alt="SECCION DE CATEGORIAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCIÓN DE CATEGORIAS</h5>
                <p class="card-text">Adminstra tus categorias.</p>
                <a href="{{url('homeCategorias')}}" class="btn btn-primary">Ir a categorias :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/compras.jpg') }}" alt="SECCION DE COMPRAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCION DE COMPRAS</h5>
                <p class="card-text">Administra tus compras :D</p>
                <a href="{{url('homeCompras')}}" class="btn btn-primary">Ir a compras</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/ventas.jpg') }}" alt="SECCION DE VENTAS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCION DE VENTAS</h5>
                <p class="card-text">Administra tus ventas :D</p>
                <a href="{{url('homeVentas')}}" class="btn btn-primary">Ir a ventas</a>
            </div>
        </div>
    </div>

</div>

@endsection
