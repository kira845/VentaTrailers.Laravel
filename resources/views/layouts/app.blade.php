<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>@yield('titulo')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

:root{
--rojo:#b11226;
--negro:#111;
}

body{
font-family:'Montserrat',sans-serif;
}

.navbar{
background:#111;
padding:15px 0;
}

.brand-text{
font-family:'Bebas Neue',sans-serif;
font-size:2rem;
letter-spacing:2px;
color:#fff!important;
text-decoration:none;
}

.brand-text span{
color:var(--rojo);
}

.nav-link{
color:#fff!important;
font-weight:500;
}

.nav-link:hover{
color:var(--rojo)!important;
}

footer{
background:#111;
color:#aaa;
font-size:.9rem;
}

.whatsapp-float{
position:fixed;
bottom:25px;
right:25px;
background:#25D366;
color:white;
font-size:28px;
width:60px;
height:60px;
display:flex;
align-items:center;
justify-content:center;
border-radius:50%;
box-shadow:0 5px 15px rgba(0,0,0,.3);
text-decoration:none;
z-index:999;
transition:.3s;
}

.whatsapp-float:hover{
transform:scale(1.1);
background:#20ba5a;
}

</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
<div class="container">

<a class="navbar-brand brand-text" href="/">
Refrigerados<span> Peralta</span>
</a>

<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/productos">Productos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contacto">Contacto</a>
</li>

</ul>

</div>
</div>
</nav>

<!-- CONTENIDO -->
@yield('contenido')

<!-- FOOTER -->
<footer class="text-center py-3">
© 2026 Peralta Refrigerados
</footer>

<!-- BOTON WHATSAPP -->
<a href="https://wa.me/526441830340" class="whatsapp-float" target="_blank">
<i class="bi bi-whatsapp"></i>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>