<?php

namespace App\Http\Controllers;

use App\Models\Parlante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
class ParlanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $parlantes = Parlante::all();
   return view('parlantes.index', compact('parlantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parlantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->parlante_modelo,'-');

       
        Parlante::create([
            'slug'=>$slug,
            'parlante_modelo'=> $request ->parlante_modelo,
            'parlante_serial'=> $request -> parlante_serial,
        
            



        ]);
        return redirect()->route('parlantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parlante $parlante)
    {
        
        return view('parlantes.show', compact('parlante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parlante $parlante)
    {
        return view('parlantes.edit', compact('parlante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parlante $parlante)
    {
        $slug = Str::slug($request->parlante_modelo,'-');
        $parlante->update([
            'slug'=>$slug,
            'parlante_modelo'=> $request ->parlante_modelo,
            'parlante_serial'=> $request -> parlante_serial
        ]);

        return Redirect::route('parlantes.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parlante $parlante)
    {
        $parlante -> delete();
        return Redirect::back();
    }
}
