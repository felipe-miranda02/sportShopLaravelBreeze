<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

/**
 * Class MarcaController
 * @package App\Http\Controllers
 */
class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::paginate();

        return view('marca.index', compact('marcas'))
            ->with('i', (request()->input('page', 1) - 1) * $marcas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = new Marca();
        return view('marca.create', compact('marca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            request()->validate(Marca::$rules);
            $marca = Marca::create($request->all());
            return redirect()->route('marcas.index')
                ->with('success', 'Marca agregada con exito.');
        } catch (\Throwable $th) {
            return redirect()->route('marcas.index')
            ->with('error', 'Ya existe una marca con ese nombre.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::find($id);

        return view('marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::find($id);

        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Marca $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        try {
            request()->validate(Marca::$rules);
            $marca->update($request->all());

            return redirect()->route('marcas.index')
                ->with('success', 'Marca actualizada con exito');
        } catch (\Throwable $th) {
            return redirect()->route('marcas.index')
            ->with('error', 'Ya existe una marca con ese nombre.');        
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->activo = false;
        $marca->save();

        $productos = Producto::where('marca_id', $marca->id)->get();
        foreach ($productos as $producto) {
            $producto->activo = false;
            $producto->save();
        }

        return redirect()->route('marcas.index')
            ->with('success', 'Marca eliminada con exito');
    }

    //API

    public function indexApi()
    {
        $marcas = Marca::where('activo', true)->get();
        return $marcas;
    }
}
