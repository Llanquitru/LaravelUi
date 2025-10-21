<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Pantalla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PantallaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $pantallas = Pantalla::all();
       return view('pantallas.index',compact('pantallas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pantallas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->marca_pantalla,'-');

       
        Pantalla::create([
            'slug'=>$slug,
            'marca_pantalla'=> $request ->marca_pantalla,
            'serial_pantalla'=> $request -> serial_pantalla,
            'estado'=>$request->estado
            



        ]);
        return redirect()->route('pantallas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pantalla $pantalla)
    {
       return view('pantallas.show', compact('pantalla'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pantalla $pantalla)
    {
      return view('pantallas.edit', compact('pantalla'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pantalla $pantalla)
    {
        $slug = Str::slug($request->marca_pantalla,'-');
        $pantalla->update([
            'slug'=>$slug,
            'marca_pantalla'=> $request ->marca_pantalla,
            'serial_pantalla'=> $request ->serial_pantalla,
            'estado'=>$request->estado
            
        ]);

        return Redirect::route('pantallas.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pantalla $pantalla)
    {
        $pantalla -> delete();
        return Redirect::back();
    }
}
