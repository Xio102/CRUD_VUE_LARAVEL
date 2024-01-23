<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->post());
        return response()->json([
            'producto' => $producto
        ]);
    }

    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->post())->save();
        return response()->json([
            'producto' => $producto
        ]);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json(['message' => 'Producto eliminado exitosamente']);
    }
}
