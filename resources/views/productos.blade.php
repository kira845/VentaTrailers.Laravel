@extends('layouts.app')

@section('titulo')
Productos
@endsection

@section('contenido')

<style>

.titulo-seccion{
font-family:'Bebas Neue',sans-serif;
font-size:40px;
letter-spacing:2px;
}

.categoria-card{
transition:.25s;
border:none;
}

.categoria-card:hover{
transform:translateY(-6px);
box-shadow:0 12px 30px rgba(0,0,0,.25);
}

.btn-ver{
background:#b11226;
color:white;
padding:10px 25px;
font-weight:600;
}

.btn-ver:hover{
background:#8f0e1d;
color:white;
}

.icono{
font-size:45px;
color:#b11226;
}

</style>

<div class="container py-5">

<h2 class="text-center mb-5 titulo-seccion">
Categorías de Productos
</h2>

<div class="row g-4 text-center">

<!-- TRACTOCAMION -->

<div class="col-md-4">

<div class="card categoria-card shadow h-100">

<div class="card-body p-4">

<div class="icono mb-3">
<i class="bi bi-truck"></i>
</div>

<h4>Tractocamión</h4>

<p>
Unidades completas listas para trabajar.
</p>

<a href="/catalogo/tractocamion" class="btn btn-ver mt-2">
Ver catálogo
</a>

</div>
</div>
</div>

<!-- CAJAS -->

<div class="col-md-4">

<div class="card categoria-card shadow h-100">

<div class="card-body p-4">

<div class="icono mb-3">
<i class="bi bi-box-seam"></i>
</div>

<h4>Cajas</h4>

<p>
Cajas refrigeradas y cajas secas.
</p>

<a href="/catalogo/cajas" class="btn btn-ver mt-2">
Ver catálogo
</a>

</div>
</div>
</div>

<!-- PARTES -->

<div class="col-md-4">

<div class="card categoria-card shadow h-100">

<div class="card-body p-4">

<div class="icono mb-3">
<i class="bi bi-gear"></i>
</div>

<h4>Partes</h4>

<p>
Refacciones y componentes industriales.
</p>

<a href="/catalogo/partes" class="btn btn-ver mt-2">
Ver catálogo
</a>

</div>
</div>
</div>

</div>

</div>

@endsection