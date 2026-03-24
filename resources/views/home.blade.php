@extends('layouts.app')

@section('titulo','Peralta Refrigerados')

@section('contenido')

<style>

/* HERO */

.hero{
background:linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
url("https://images.unsplash.com/photo-1581092919534-1c46c20d8b82");
background-size:cover;
background-position:center;
color:#fff;
padding:120px 20px;
text-align:center;
}

.hero h1{
font-family:'Bebas Neue',sans-serif;
font-size:3.2rem;
letter-spacing:2px;
}

.hero p{
font-size:1.1rem;
opacity:.9;
}

.btn-productos{
background-color:var(--rojo);
color:#fff;
padding:14px 34px;
font-size:1.1rem;
border-radius:6px;
box-shadow:0 8px 20px rgba(0,0,0,.35);
transition:.3s;
}

.btn-productos:hover{
background-color:#8f0e1d;
transform:translateY(-2px);
}

/* NOSOTROS */

.nosotros i{
font-size:3rem;
color:var(--rojo);
}

.nosotros h5{
margin-top:15px;
font-weight:600;
}

</style>

<!-- HERO -->
<section class="hero">
<div class="container">

<h1>TRAILERS Y CAJAS REFRIGERADAS</h1>

<p class="mt-3">
Soluciones industriales listas para trabajar
</p>

<a href="/productos" class="btn btn-productos mt-4">
Ver Productos
</a>

</div>
</section>

<!-- NOSOTROS -->
<section class="py-5 nosotros">

<div class="container">

<div class="row text-center">

<div class="col-md-4 mb-4">
<i class="bi bi-truck"></i>
<h5>Transporte Confiable</h5>
<p>Unidades resistentes y listas para carretera.</p>
</div>

<div class="col-md-4 mb-4">
<i class="bi bi-thermometer-snow"></i>
<h5>Refrigeración Eficiente</h5>
<p>Ideal para productos que requieren frío constante.</p>
</div>

<div class="col-md-4 mb-4">
<i class="bi bi-currency-dollar"></i>
<h5>Precios Justos</h5>
<p>Calidad industrial al mejor costo.</p>
</div>

</div>

</div>

</section>

<!-- CONTACTO -->
<section id="contacto" class="py-5 bg-dark text-white">

<div class="container">

<h2 class="text-center mb-5"
style="font-family:'Bebas Neue';letter-spacing:2px;">
Contacto
</h2>

<div class="row align-items-center">

<div class="col-md-5 mb-4">

<h5><i class="bi bi-telephone-fill"></i> Teléfono</h5>
<p>644 183 0340</p>

<h5 class="mt-4"><i class="bi bi-whatsapp"></i> WhatsApp</h5>

<a href="https://wa.me/526441830340" class="btn btn-success">
Enviar mensaje
</a>

<h5 class="mt-4"><i class="bi bi-geo-alt-fill"></i> Ubicación</h5>

<a href="https://maps.app.goo.gl/FqXkkgvnqHdMHt4GA"
target="_blank"
class="btn btn-outline-light">
Abrir en Google Maps
</a>

</div>

<div class="col-md-7">

<iframe
src="https://www.google.com/maps?q=27.4936,-109.9302&hl=es&z=15&output=embed"
width="100%"
height="350"
style="border:0;border-radius:8px;"
loading="lazy">
</iframe>

</div>

</div>

</div>

</section>

@endsection