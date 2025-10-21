<?php

namespace App\Http\Controllers;

use App\Models\Agrupado;
use App\Models\Funcionario;
use App\Models\Gabinete;
use App\Models\Insumo;
use App\Models\Mause;
use App\Models\Pantalla;
use App\Models\Parlante;
use App\Models\Teclado;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AgrupadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agrupados = Agrupado::with('insumos','pantallas','teclados','mauses','gabinetes','parlantes','funcionarios')->get();
        return view('agrupados.index',compact('agrupados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $insumos = Insumo::all();
        $funcionarios = Funcionario::all();
        $pantallas = Pantalla::all();
        $teclados = Teclado::all();
        $mauses = Mause::all();
        $gabinetes = Gabinete::all();
        $parlantes = Parlante::all();

        return view('agrupados.create',compact('insumos','funcionarios','pantallas','teclados','mauses','gabinetes','parlantes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->departamento,'-');
    
           
        Agrupado::create([
            'slug'=>$slug,
            'departamento'=> $request -> departamento,
            'edificio'=>$request->edificio,
            'teclado_id'=>$request->teclado_id,
            'insumo_id'=>$request->insumo_id,
            'gabinete_id'=>$request->gabinete_id,
            'mause_id'=>$request->mause_id,
            'parlante_id'=>$request->parlante_id,
            'funcionario_id'=>$request->funcionario_id,
            'pantalla_id'=>$request->pantalla_id
            



        ]);

        return redirect()->route('agrupados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agrupado $agrupado)
    {


        return view('agrupados.show', compact('agrupado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agrupado $agrupado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agrupado $agrupado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agrupado $agrupado)
    {
        //
    }
}
