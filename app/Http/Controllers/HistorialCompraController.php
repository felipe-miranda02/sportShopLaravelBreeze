<?php

namespace App\Http\Controllers;

use App\Models\HistorialCompra;
use App\Models\Cliente;
use Illuminate\Http\Request;

/**
 * Class HistorialCompraController
 * @package App\Http\Controllers
 */
class HistorialCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialCompras = HistorialCompra::paginate();

        return view('historial-compra.index', compact('historialCompras'))
            ->with('i', (request()->input('page', 1) - 1) * $historialCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialCompra = new HistorialCompra();
        return view('historial-compra.create', compact('historialCompra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistorialCompra::$rules);

        $historialCompra = HistorialCompra::create($request->all());

        return redirect()->route('historial-compras.index')
            ->with('success', 'HistorialCompra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialCompra = HistorialCompra::find($id);

        return view('historial-compra.show', compact('historialCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialCompra = HistorialCompra::find($id);

        return view('historial-compra.edit', compact('historialCompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistorialCompra $historialCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialCompra $historialCompra)
    {
        request()->validate(HistorialCompra::$rules);

        $historialCompra->update($request->all());

        return redirect()->route('historial-compras.index')
            ->with('success', 'HistorialCompra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historialCompra = HistorialCompra::find($id)->delete();

        return redirect()->route('historial-compras.index')
            ->with('success', 'HistorialCompra deleted successfully');
    }

    //API

    public function indexApi(Request $request)
    {
        $cliente = Cliente::where('email', $request->email)->first();
        $historialCompras = HistorialCompra::where('cliente_id', $cliente->id)->get();
        return $historialCompras;
    }
}