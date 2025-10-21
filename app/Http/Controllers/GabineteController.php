<?php

namespace App\Http\Controllers;

use App\Models\Gabinete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
class GabineteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gabinetes = Gabinete::all();
        return view('gabinetes.index',compact('gabinetes'));
    }


    public function search(Request $request){

        $search = $request->search;

        $gabinetes=Gabinete::where(function($query)use($search){

            $query->where('estado','like',"%$search%")
            ->orWhere(['',''],'like',"%$search%");
        })
        ->get();

        return view('gabinetes.index',compact('gabinetes','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gabinetes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->marca_gabinete,'-');

       
        Gabinete::create([
            'slug'=>$slug,
            'marca_gabinete'=> $request ->marca_gabinete,
            'serial_gabinete'=> $request -> serial_gabinete,
            'estado'=> $request -> estado,
            'ram'=> $request -> ram,
            'ram_tipo'=> $request ->ram_tipo,



        ]);
        return redirect()->route('gabinetes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gabinete $gabinete)
    {
        return view('gabinetes.show', compact('gabinete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gabinete $gabinete)
    {
       return view('gabinetes.edit', compact('gabinete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gabinete $gabinete)
    {
        $slug = Str::slug($request->marca_gabinete,'-');
        $gabinete->update([
            'slug'=>$slug,
            'marca_gabinete'=> $request->marca_gabinete,
            'serial_gabinete'=> $request->serial_gabinete,
            'estado'=> $request -> estado,
            'ram'=> $request -> ram,
            'ram_tipo'=> $request -> ram_tipo,
        ]);

        return Redirect::route('gabinetes.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gabinete $gabinete)
    {
      
        $gabinete -> delete();
        return Redirect::back();

    }
}
