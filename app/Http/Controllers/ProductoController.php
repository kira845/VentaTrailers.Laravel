<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoImagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::with('imagenes')->get();
        return view('admin.productos.index', compact('productos'));
    }

    public function crear()
    {
        return view('admin.productos.crear');
    }

   
    public function store(Request $request)
{

    $producto = Producto::create([
        'titulo' => $request->titulo,
        'categoria' => $request->categoria,
        'estado' => $request->estado,
        'descripcion' => $request->descripcion
    ]);

    if($request->hasFile('imagenes')){

        foreach($request->file('imagenes') as $imagen){

            $ruta = $imagen->store('productos','public');

            ProductoImagen::create([
                'producto_id' => $producto->id,
                'ruta' => $ruta
            ]);
        }

    }

    return redirect('/admin/productos');
}
public function edit($id)
{
    $producto = Producto::with('imagenes')->findOrFail($id);

    return view('admin.productos.edit', compact('producto'));
}

public function destroy($id)
{
    $producto = Producto::findOrFail($id);

    // Obtener todas las imágenes del producto
    $imagenes = ProductoImagen::where('producto_id', $producto->id)->get();

    foreach ($imagenes as $imagen) {

        // borrar archivo físico
        Storage::delete('public/' . $imagen->ruta);

        // borrar registro de imagen
        $imagen->delete();
    }

    // eliminar producto
    $producto->delete();

    return redirect()->back()->with('success', 'Producto eliminado correctamente');
}
public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);

    $producto->titulo = $request->titulo;
    $producto->descripcion = $request->descripcion;
    $producto->categoria = $request->categoria;
    $producto->estado = $request->estado;

    $producto->save();

    // guardar nuevas fotos
    if ($request->hasFile('imagenes')) {

        foreach ($request->file('imagenes') as $imagen) {

            $ruta = $imagen->store('productos','public');

            ProductoImagen::create([
                'producto_id' => $producto->id,
                'ruta' => $ruta
            ]);

        }

    }

    return redirect('/admin/productos')
        ->with('success','Producto actualizado');
}
public function destroyImagen($id)
{
    $imagen = ProductoImagen::findOrFail($id);

    Storage::disk('public')->delete($imagen->ruta);

    $imagen->delete();

    return back();
}
public function catalogo($categoria)
{
    $productos = \App\Models\Producto::where('categoria',$categoria)
        ->with('imagenes')
        ->latest()
        ->get();

    return view('catalogo', compact('productos','categoria'));
}
public function show($id)
{
    $producto = Producto::with('imagenes')->findOrFail($id);

    return view('producto', compact('producto'));
}
}
