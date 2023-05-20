<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Tipo;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        $marcas = Marca::all();

        $marca = request()->input('marca');
        $tipo = request()->input('tipo');

        $marcaId = null;
        $tipoId = null;
        if($marca != null){
            $marcaId = Marca::where('name', $marca)->get()[0]->id;
        }
        if($tipo != null){
            $tipoId = Tipo::where('name', $tipo)->get()[0]->id;
        }

        $productos = null;
        if($marcaId != null and $tipoId != null){
            $productos = Producto::where('marca_id', $marcaId)->where('tipo_id', $tipoId)->paginate();
        } else if($tipoId != null){
            $productos = Producto::where('tipo_id', $tipoId)->paginate();
        } else if($marcaId != null){
            $productos = Producto::where('marca_id', $marcaId)->paginate();
        } else{
            $productos = Producto::paginate();
        }

        return view('producto.index', compact('productos', 'tipos', 'marcas'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $tipo = Tipo::where('activo', true)->pluck('name', 'id');
        $marca = Marca::where('activo', true)->pluck('name', 'id');
        return view('producto.create', compact('producto', 'tipo', 'marca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipo = Tipo::where('activo', true)->pluck('name', 'id');
        $marca = Marca::where('activo', true)->pluck('name', 'id');
        return view('producto.edit', compact('producto', 'tipo', 'marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->activo = false;
        $producto->save();
        
        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado con exito');
    }

    //API
    public function indexApi()
    {
        $productos =  Producto::where('activo', true)->get();
        return $productos;
    }
}
