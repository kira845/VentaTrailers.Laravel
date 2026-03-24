@extends('layouts.app')

@section('titulo')
{{ $producto->titulo }}
@endsection

@section('contenido')
<style>

.imagen-producto{
height:450px;
object-fit:cover;
width:100%;
}
.descripcion-producto{
font-size:16px;
line-height:1.7;
color:#444;
margin-top:15px;
}

</style>
<div class="container py-5">

<div class="row">

<!-- CARRUSEL -->

<div class="col-md-6">

<div id="carouselProducto" class="carousel slide">

<div class="carousel-inner">

@foreach($producto->imagenes as $key => $imagen)

<div class="carousel-item {{ $key == 0 ? 'active' : '' }}">

<img src="{{ asset('storage/'.$imagen->ruta) }}" 
class="d-block w-100 rounded imagen-producto">
</div>

@endforeach

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselProducto" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselProducto" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

</div>


<!-- INFO -->

<div class="col-md-6">

<h1 class="mb-3">
{{ $producto->titulo }}
</h1>

<p class="text-danger fw-bold">
Estado: {{ ucfirst($producto->estado) }}
</p>

<p class="descripcion-producto">
{!! nl2br(e($producto->descripcion)) !!}
</p>
<a href="https://wa.me/526441830340?text=Hola,%20me%20interesa%20este%20producto:%20{{ urlencode($producto->titulo) }}%20{{ urlencode(url()->current()) }}"
class="btn btn-success btn-lg mt-3"
target="_blank">

Cotizar por WhatsApp

</a>

</div>

</div>

</div>

@endsection