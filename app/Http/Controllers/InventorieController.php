<?php

namespace App\Http\Controllers;

use App\Models\Inventorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class InventorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventorie::with('user')->get();
       return view('inventario.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->nombre_objeto,'-');

       
        Inventorie::create([
            'slug'=>$slug,
            'nombre_objeto'=> $request -> nombre_objeto,
            'descripcion'=> $request -> descripcion,
            'serial'=>$request-> serial,
            'estado' =>$request-> estado,
            'user_id'=>Auth::user()->id



        ]);

        return redirect()->route('inventario.alert');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventorie $inventorie)
    {
      
        return view('inventario.show', compact('inventorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventorie $inventorie)
    {
       return view('inventario.edit', compact('inventorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventorie $inventorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventorie $inventorie)
    {
        //
    }


    // public function tablaInventario(){
    //     $inventories = Inventorie::with('user')->get();
    //     return view('inventario.tablaInventario',compact('inventories'));
    // }

    public function alert(){
        return view('inventario.alert');
    }
}
