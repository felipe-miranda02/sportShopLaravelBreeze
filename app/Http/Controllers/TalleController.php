<?php

namespace App\Http\Controllers;

use App\Models\Talle;
use Illuminate\Http\Request;

/**
 * Class TalleController
 * @package App\Http\Controllers
 */
class TalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talles = Talle::paginate();

        return view('talle.index', compact('talles'))
            ->with('i', (request()->input('page', 1) - 1) * $talles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $talle = new Talle();
        return view('talle.create', compact('talle'));
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
            request()->validate(Talle::$rules);
            $talle = Talle::create($request->all());
            return redirect()->route('talles.index')
                ->with('success', 'Talle creado con exito.');        
        } catch (\Throwable $th) {
            return redirect()->route('talles.index')
                ->with('error', 'Ya existe un talle con ese nombre.');        
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
        $talle = Talle::find($id);

        return view('talle.show', compact('talle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $talle = Talle::find($id);

        return view('talle.edit', compact('talle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Talle $talle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talle $talle)
    {
        try {
            request()->validate(Talle::$rules);
            $talle->update($request->all());
            return redirect()->route('talles.index')
                ->with('success', 'Talle actualizado con exito');        
        } catch (\Throwable $th) {
            return redirect()->route('talles.index')
                ->with('error', 'Ya existe un talle con ese nombre.');        
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $talle = Talle::find($id);
        $talle->activo = false;
        $talle->save();

        return redirect()->route('talles.index')
            ->with('success', 'Talle eliminado con exito');
    }

    //API

    public function indexApi()
    {
        $talles =  Talle::where('activo', true)->get();
        return $talles;
    }
}
