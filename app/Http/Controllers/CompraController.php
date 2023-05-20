<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Cliente;
use App\Models\HistorialCompra;
use App\Models\Producto;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * Class CompraController
 * @package App\Http\Controllers
 */
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::paginate();

        return view('compra.index', compact('compras'))
            ->with('i', (request()->input('page', 1) - 1) * $compras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compra = new Compra();
        return view('compra.create', compact('compra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compra::$rules);

        $compra = Compra::create($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = Compra::find($id);

        return view('compra.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = Compra::find($id);

        return view('compra.edit', compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compra $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        request()->validate(Compra::$rules);

        $compra->update($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compra = Compra::find($id)->delete();

        return redirect()->route('compras.index')
            ->with('success', 'Compra deleted successfully');
    }

    //API

    public function indexApi(Request $request)
    {
        $cliente = Cliente::where('email', $request->email)->first();
        $compras = Compra::where('cliente_id', $cliente->id)->get();
        return $compras;
    }

    public function storeApi(Request $request)
    {
        $cliente =  Cliente::where('email', $request->email)->first();
        $compra = new Compra;
        $compra->cliente_id = $cliente->id;
        $compra->producto_id = $request->producto_id;
        $compra->talle_id = $request->talle_id;
        $compra->cantidad = $request->cantidad;
        $compra->save();

        return $compra;
    }

    public function updateApi(Request $request)
    {
        $compra = Compra::findOrFail($request->id);
        $compra->cantidad = $request->cantidad;
        $compra->talle_id = $request->talle_id;
        $compra->save();
        
        return $compra;
    }

    public function destroyApi(Request $request)
    {
        $compra = Compra::find($request->id)->delete();
        return $compra; 
    }

    public function confirmarCompraApi(Request $request)
    {
        $compra = Compra::find($request->compra_id);
        $producto = Producto::find($compra->producto_id);

        $historialCompra = new HistorialCompra;
        $historialCompra->producto_id = $compra->producto_id;
        $historialCompra->cliente_id = $compra->cliente_id;
        $historialCompra->cantidad = $compra->cantidad;
        $historialCompra->talle_id = $compra->talle_id;
        $historialCompra->precio = $producto->precio;
        $historialCompra->fecha = Carbon::now();
        $historialCompra->save();

        $compra->delete();

        return $historialCompra;
    }
}