<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vga= Insumo::where('cables', 'VGA')->get();
        $red= Insumo::where('cables', 'Cable_de_red')->get();
        $magic= Insumo::where('cables', 'Cable_de_poder_magic')->get();
        $normal= Insumo::where('cables', 'Cable_de_poder_normal')->get();
        $insumos= Insumo::with('user')->get();
        return view('insumos.index',compact('insumos','vga','red','magic', 'normal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $slug = Str::slug($request->cables,'-');

       
        Insumo::create([
            'slug'=>$slug,
            'cables'=> $request ->cables,
            'estado'=> $request -> estado,
            'marca'=>$request-> marca,
            'serial' =>$request-> serial,
            'user_id'=>Auth::user()->id



        ]);

        return redirect()->route('insumo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Insumo $insumo)
    {
        return view('insumos.show',compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insumo $insumo)
    {
        return view('insumos.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insumo $insumo)
    {
        $slug = Str::slug($request->cables,'-');
        $insumo->update([
            'slug'=>$slug,
            'cables'=> $request -> cables,
            'estado'=> $request -> estado,
            'marca'=>$request-> marca,
            'serial' =>$request-> serial,
            
        ]);
        return Redirect::route('insumo.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insumo $insumo)
    {
        $insumo -> delete();
        return Redirect::back();
    }
}
