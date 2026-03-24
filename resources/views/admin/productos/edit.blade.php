<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Editar Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f4f4;
}

.container-form{
max-width:800px;
margin:auto;
margin-top:60px;
background:white;
padding:40px;
border-radius:10px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

h2{
font-weight:700;
margin-bottom:25px;
}

.btn-guardar{
background:#b11226;
color:white;
font-weight:600;
}

.btn-guardar:hover{
background:#8f0e1d;
}

.imagen-producto{
width:150px;
height:150px;
object-fit:cover;
border-radius:10px;
}

.imagen-box{
position:relative;
display:inline-block;
margin:10px;
}

.btn-eliminar-img{
position:absolute;
top:-8px;
right:-8px;
background:red;
color:white;
border:none;
border-radius:50%;
width:28px;
height:28px;
font-size:14px;
}

</style>

</head>
<body>

<div class="container">

<div class="container-form">

<h2>Editar Producto</h2>

<form action="/admin/productos/{{ $producto->id }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Título</label>
<input type="text" name="titulo" class="form-control" value="{{ $producto->titulo }}" required>
</div>

<div class="mb-3">
<label class="form-label">Categoría</label>

<select name="categoria" class="form-control">

<option value="tractocamion" {{ $producto->categoria == 'tractocamion' ? 'selected' : '' }}>
Tractocamión
</option>

<option value="cajas" {{ $producto->categoria == 'cajas' ? 'selected' : '' }}>
Cajas
</option>

<option value="partes" {{ $producto->categoria == 'partes' ? 'selected' : '' }}>
Partes
</option>

</select>

</div>

<div class="mb-3">

<label class="form-label">Estado</label>

<select name="estado" class="form-control">

<option value="nuevo" {{ $producto->estado == 'nuevo' ? 'selected' : '' }}>
Nuevo
</option>

<option value="usado" {{ $producto->estado == 'usado' ? 'selected' : '' }}>
Usado
</option>

</select>

</div>

<div class="mb-3">

<label class="form-label">Descripción</label>

<textarea name="descripcion" class="form-control" rows="4">{{ $producto->descripcion }}</textarea>

</div>

<hr>

<h5>Imágenes actuales</h5>

<div>

@foreach($producto->imagenes as $imagen)

<div class="imagen-box">

<img src="{{ asset('storage/'.$imagen->ruta) }}" class="imagen-producto">

</div>

@endforeach

</div>

<hr>

<div class="mb-3">

<label class="form-label">Agregar nuevas imágenes</label>

<input type="file" name="imagenes[]" class="form-control" multiple>

</div>

<button type="submit" class="btn btn-guardar w-100">
Actualizar producto
</button>

</form>

<hr>

<h5>Imágenes para borrar </h5>

@foreach($producto->imagenes as $imagen)

<div class="imagen-box">

<img src="{{ asset('storage/'.$imagen->ruta) }}" class="imagen-producto">

<form action="{{ route('imagenes.destroy',$imagen->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn-eliminar-img">
×
</button>

</form>

</div>

@endforeach
</div>

</div>

</body>
</html>