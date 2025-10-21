<?php

namespace App\Http\Controllers;

use App\Models\Mause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
class MauseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mauses = Mause::all();
       return view('ratones.index', compact('mauses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ratones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->marca_raton,'-');

       
        Mause::create([
            'slug'=>$slug,
            'marca_raton'=> $request ->marca_raton,
            'serial_raton'=> $request -> serial_raton,
            'tipo_raton'=>$request-> tipo_raton,
            
            



        ]);

        return redirect()->route('mauses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mause $mause)
    {

      
        return view('ratones.show', compact('mause'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mause $mause)
    {
       return view('ratones.edit',compact('mause'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mause $mause)
    {
        $slug = Str::slug($request->marca_raton,'-');
        $mause->update([
            'slug'=>$slug,
            'marca_raton'=> $request ->marca_raton,
            'serial_raton'=> $request -> serial_raton,
            'tipo_raton'=>$request-> tipo_raton,
            
            
        ]);

        return Redirect::route('mauses.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mause $mause)
    {
        $mause -> delete();
        return Redirect::back();
    }
}
