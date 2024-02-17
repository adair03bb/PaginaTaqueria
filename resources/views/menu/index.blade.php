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
                <h5 class="card-title">SECCIÓN DE COMPRAS</h5>
                <p class="card-text">Adminstra tus compras de insumos.</p>
                <a href="{{url('homeInsumosCompras')}}" class="btn btn-primary">Ir a compras :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/insumosPr.jpg') }}" alt="SECCION DE INSUMOS-PRODUCTOS" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCIÓN DE INSUMOS DE PRODUCTOS</h5>
                <p class="card-text">Adminstra tus insumos que usas en tus productos.</p>
                <a href="{{url('homeInsumosProductos')}}" class="btn btn-primary">Ir a Insumos-Productos :D</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-image"> <img src="{{ asset('imagenes/inventario.jpg') }}" alt="SECCION DE INVENTARIO" class="img-fluid" style="margin: 1rem;">
                </div>
                <h5 class="card-title">SECCIÓN DE INVENTARIO</h5>
                <p class="card-text">Adminstra tu inventario.</p>
                <a href="{{url('homeInventario')}}" class="btn btn-primary">Ir a Inventario :D</a>
            </div>
        </div>
    </div>

@endsection
