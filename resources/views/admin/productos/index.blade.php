<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f4f4;
}

.container-admin{
max-width:1100px;
margin:auto;
margin-top:50px;
}

.imagen-producto{
width:100%;
height:230px;
object-fit:cover;
border-top-left-radius:10px;
border-top-right-radius:10px;
}
.card-producto{
box-shadow:0 10px 25px rgba(0,0,0,.1);
border:none;
}

.btn-nuevo{
background:#b11226;
color:white;
font-weight:600;
}

.btn-nuevo:hover{
background:#8f0e1d;
}

</style>

</head>
<body>

<div class="container container-admin">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>Productos</h2>

<a href="/admin/productos/crear" class="btn btn-nuevo">
Agregar Producto
</a>

</div>

<div class="row">

@foreach($productos as $producto)

<div class="col-md-4 mb-4">

<div class="card card-producto">

@if($producto->imagenes->count())

<img src="{{ asset('storage/'.$producto->imagenes->first()->ruta) }}" class="card-img-top imagen-producto">
@endif

<div class="card-body">

<h5>{{ $producto->titulo }}</h5>

<p>

<strong>Categoría:</strong> {{ $producto->categoria }} <br>
<strong>Estado:</strong> {{ $producto->estado }}

</p>

<a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-dark btn-sm">
Editar
</a>
<form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger btn-sm"
    onclick="return confirm('¿Seguro que quieres eliminar este producto?')">
        Eliminar
    </button>
</form>
</a>

</div>

</div>

</div>

@endforeach

</div>

</div>

</body>
</html>