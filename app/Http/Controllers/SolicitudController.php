<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //     return  $this->middleware('auth')->except('i');
    //  }
    public function index()
    {


    //    $elias = Auth::user()->id;

    $solicituds = Solicitud::with('user')->get();
return view('solicitudes.index', compact('solicituds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $slug = Str::slug($request->oficina,'-');

       
        Solicitud::create([
            'slug'=>$slug,
            'oficina'=> $request -> oficina,
            'equipo'=> $request -> equipo,
            'codigo'=>$request-> codigo,
            'requerimiento' =>$request-> requerimiento,
            'descripcion'=>$request-> descripcion,
            'id_user'=>Auth::user()->id



        ]);


        return Redirect::route('solicitud.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        return view('solicitudes.show', compact('solicitud'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        return view('solicitudes.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $slug = Str::slug($request->oficina,'-');

       
       $solicitud-> update([
            'slug'=>$slug,
            'oficina'=> $request -> oficina,
            'equipo'=> $request -> equipo,
            'codigo'=>$request-> codigo,
            'requerimiento' =>$request-> requerimiento,
            'descripcion'=>$request-> descripcion,
             'id_user'=>Auth::user()->id



        ]);


        
        return Redirect::route('solicitud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud -> delete();
       return Redirect::back(); 
    }
}
