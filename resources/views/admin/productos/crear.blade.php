<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f4f4;
}

.container-form{
max-width:700px;
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

</style>

</head>
<body>

<div class="container">

<div class="container-form">

<h2>Agregar Producto</h2>

<form action="/admin/productos" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">
<label class="form-label">Título</label>
<input type="text" name="titulo" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Categoría</label>
<select name="categoria" class="form-control">

<option value="tractocamion">Tractocamión</option>
<option value="cajas">Cajas</option>
<option value="partes">Partes</option>

</select>
</div>

<div class="mb-3">
<label class="form-label">Condición</label>
<select name="estado" class="form-control">

<option value="nuevo">Nuevo</option>
<option value="usado">Usado</option>

</select>
</div>

<div class="mb-3">
<label class="form-label">Descripción</label>
<textarea name="descripcion" class="form-control" rows="4"></textarea>
</div>

<div class="mb-3">
<label class="form-label">Imágenes</label>
<input type="file" name="imagenes[]" class="form-control" multiple required onchange="previewImagenes(event)">
</div>

<div id="preview" class="row g-2"></div>

<button class="btn btn-guardar w-100">
Guardar producto
</button>

</form>

</div>

</div>
<script>

let imagenes = [];

function previewImagenes(event){

    let preview = document.getElementById("preview");
    preview.innerHTML = "";

    imagenes = Array.from(event.target.files);

    imagenes.forEach((file,index)=>{

        let reader = new FileReader();

        reader.onload = function(e){

            preview.innerHTML += `
                <div class="col-4 position-relative">

                    <img src="${e.target.result}" 
                    style="width:100%; height:120px; object-fit:cover; border-radius:6px;">

                    <button type="button" 
                    onclick="eliminarImagen(${index})"
                    style="
                    position:absolute;
                    top:5px;
                    right:5px;
                    background:red;
                    color:white;
                    border:none;
                    border-radius:50%;
                    width:25px;
                    height:25px;
                    font-size:14px;
                    ">
                    ×
                    </button>

                </div>
            `;

        };

        reader.readAsDataURL(file);

    });

}

function eliminarImagen(index){

    imagenes.splice(index,1);

    let input = document.querySelector('input[name="imagenes[]"]');

    let dt = new DataTransfer();

    imagenes.forEach(file => dt.items.add(file));

    input.files = dt.files;

    previewImagenes({target:input});

}

</script>
</body>
</html>