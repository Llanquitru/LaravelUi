<?php

namespace App\Http\Controllers;

use App\Models\Teclado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
class TecladoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teclados = Teclado::all();
        return view('teclados.index', compact('teclados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teclados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->marca_teclado,'-');

       
        Teclado::create([
            'slug'=>$slug,
            'marca_teclado'=> $request ->marca_teclado,
            'serial_teclado'=> $request -> serial_teclado,
            'tipo_teclado'=>$request->tipo_teclado
            



        ]);
        return redirect()->route('teclados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teclado $teclado)
    {
       return view('teclados.show', compact('teclado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teclado $teclado)
    {
       return view('teclados.edit', compact('teclado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teclado $teclado)
    {

     
        $slug = Str::slug($request->marca_teclado,'-');
        $teclado->update([
            'slug'=>$slug,
            'marca_teclado'=> $request ->marca_teclado,
            'serial_teclado'=> $request -> serial_teclado,
            'tipo_teclado'=>$request->tipo_teclado
            
        ]);
        return Redirect::route('teclados.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teclado $teclado)
    {
        $teclado -> delete();
        return Redirect::back();
    }
}
