@extends('layouts.app')

@section('titulo')
Catálogo
@endsection

@section('contenido')

<style>

:root{
--rojo:#b11226;
--verde:#25D366;
}

/* HEADER CATALOGO */

.header-catalogo{
background:#b11226;
color:white;
padding:60px 20px;
text-align:center;
}

.header-catalogo h1{
font-family:'Bebas Neue',sans-serif;
font-size:3rem;
letter-spacing:2px;
}

/* CARDS */

.producto-card{
border:none;
border-radius:10px;
overflow:hidden;
transition:.3s;
background:white;
}

.producto-card:hover{
transform:translateY(-6px);
box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.producto-card img{
height:240px;
object-fit:cover;
}

.producto-card h4{
font-weight:600;
}

.estado{
font-size:.85rem;
font-weight:600;
color:#b11226;
}

/* BOTON WHATSAPP */

.btn-whatsapp{
background:#25D366;
color:white;
font-weight:600;
padding:12px;
border-radius:6px;
box-shadow:0 6px 15px rgba(0,0,0,.3);
transition:.3s;
}

.btn-whatsapp:hover{
background:#1ebc59;
transform:translateY(-2px);
}

</style>


<!-- HEADER -->

<section class="header-catalogo">

<div class="container">

<h1>
Productos disponibles
</h1>

</div>

</section>


<!-- PRODUCTOS -->

<section class="py-5">

<div class="container">

<div class="row g-4">

@forelse($productos as $producto)

<div class="col-md-6 col-lg-4">

<a href="{{ route('producto.show', $producto->id) }}" style="text-decoration:none;color:inherit;">

<div class="card producto-card h-100">

@if($producto->imagenes->first())
<img src="{{ asset('storage/'.$producto->imagenes->first()->ruta) }}">
@endif

<div class="card-body">

<h4>{{ $producto->titulo }}</h4>

<p class="estado">
{{ ucfirst($producto->estado) }}
</p>

<p>
{{ Str::limit($producto->descripcion,80) }}
</p>

</div>

</div>

</a>

</div>

@empty

<div class="col-12 text-center">

<h4>No hay productos en esta categoría</h4>

</div>

@endforelse

</div>

</div>

</section>

@endsection